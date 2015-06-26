<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Service;

use DomainException;
use Zend\Http;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterAwareTrait;
use Zend\Stdlib\Hydrator\HydratorInterface;
use Zoho\Subscriptions\Entity\EntityInterface;

/**
 * Class Resource
 *
 * @package Zoho\Subscriptions\Service
 */
class Resource implements InputFilterAwareInterface
{
    use InputFilterAwareTrait;

    const ZOHO_API_ENDPOINT = 'https://subscriptions.zoho.com/api/v1';

    /**
     * @var array
     */
    protected $errors = [];

    /**
     * @var Http\Client
     */
    protected $httpClient;

    /**
     * @var mixed
     */
    protected $curl;

    /**
     * @var string
     */
    protected $collectionName;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $entityClass;

    /**
     * @var HydratorInterface
     */
    protected $hydrator;

    public function hasErrors()
    {
        return count($this->errors) > 0;
    }

    /**
     * Get the collectionName
     *
     * @return string
     */
    public function getCollectionName()
    {
        return $this->collectionName;
    }

    /**
     * Set the collectionName
     *
     * @param string $collectionName
     * @return Resource
     */
    public function setCollectionName($collectionName)
    {
        $this->collectionName = $collectionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return Resource
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityClass()
    {
        return $this->entityClass;
    }

    /**
     * @param string $entityClass
     * @return Resource
     */
    public function setEntityClass($entityClass)
    {
        $this->entityClass = $entityClass;
        return $this;
    }

    /**
     * @return HydratorInterface
     */
    public function getHydrator()
    {
        return $this->hydrator;
    }

    /**
     * @param HydratorInterface $hydrator
     * @return Resource
     */
    public function setHydrator(HydratorInterface $hydrator)
    {
        $this->hydrator = $hydrator;
        return $this;
    }

    /**
     * Constructor
     *
     * @param $curl
     */
    public function __construct($curl)
    {
        $this->curl = $curl;
    }

    /**
     * @return array
     */
    public function fetchAll()
    {
        curl_setopt($this->curl, CURLOPT_URL, self::ZOHO_API_ENDPOINT . $this->getPath());
        $result = curl_exec($this->curl);
        $result = json_decode($result);
        curl_close($this->curl);
        $collectionName = $this->getCollectionName();
        return $result->$collectionName;
    }

    /**
     * @param $id
     * @return EntityInterface
     */
    public function fetch($id)
    {
        $this->httpClient->setMethod(Http\Request::METHOD_GET)
                         ->setUri(self::ZOHO_API_ENDPOINT . $this->getPath() . '/' . $id);

        return $this->processRequest();

    }

    /**
     * @param EntityInterface $entity
     * @return EntityInterface
     */
    public function create(EntityInterface $entity)
    {
        $this->httpClient->setMethod(Http\Request::METHOD_POST)
                         ->setUri(self::ZOHO_API_ENDPOINT . $this->getPath());
        $this->processData($entity);
        return $this->processRequest();
    }

    /**
     * @param $id
     * @param EntityInterface $entity
     * @return EntityInterface
     */
    public function update($id, EntityInterface $entity)
    {
        $this->httpClient->setMethod(Http\Request::METHOD_PUT)
                         ->setUri(self::ZOHO_API_ENDPOINT . $this->getPath() . '/' . $id);
        $this->processData($entity);
        return $this->processRequest();
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $this->httpClient->setMethod(Http\Request::METHOD_DELETE)
                         ->setUri(self::ZOHO_API_ENDPOINT . $this->getPath() . '/' . $id);
        $response = $this->httpClient->send();
        if ($response->isSuccess()) {
            return true;
        } elseif ($response->isClientError() || $response->isServerError()) {
            throw new DomainException(
                sprintf(
                    'An error occured while requesting Zoho API for %s',
                    __METHOD__
                ),
                $response->getStatusCode()
            );
        }
    }

    /**
     * @param EntityInterface $entity
     */
    protected function processData(EntityInterface $entity)
    {
        $data = $this->getHydrator()->extract($entity);
        $this->getInputFilter()->setData($data);

        if (!$this->getInputFilter()->isValid()) {
            $this->errors = $this->getInputFilter()->getMessages();
            throw new DomainException("Unprocessable entity", 422);
        }

        $this->httpClient->setRawBody(json_decode($data));
    }

    /**
     * @return object
     */
    protected function processRequest()
    {
        $response = $this->httpClient->send();

        if ($response->isSuccess()) {
            $result = $response->getBody();
            $entityClass= $this->getEntityClass();
            $entity = $this->getHydrator()->hydrate((array)$result, new $entityClass);
            return $entity;
        } elseif ($response->isClientError() || $response->isServerError()) {
            throw new DomainException(
                sprintf(
                    'An error occured while requesting Zoho API for %s',
                    __METHOD__
                ),
                $response->getStatusCode()
            );
        }
    }
}
