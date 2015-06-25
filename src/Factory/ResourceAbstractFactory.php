<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Factory;

use Zend\Http\Client;
use Zend\InputFilter\Factory as InputFilterFactory;
use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zoho\Subscriptions\Entity\EntityInterface;
use Zoho\Subscriptions\Service\Resource;

class ResourceAbstractFactory implements AbstractFactoryInterface
{
    /**
     * Cache of canCreateServiceWithName lookups
     * @var array
     */
    protected $lookupCache = array();

    /**
     * Determine if we can create a service with name
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @param $name
     * @param $requestedName
     * @return bool
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        if (array_key_exists($requestedName, $this->lookupCache)) {
            return $this->lookupCache[$requestedName];
        }

        $config = $serviceLocator->get('Config');

        if (!isset($config['zoho']) || !is_array($config['zoho'])) {
            return false;
        }

        $config = $config['zoho'];

        if (!isset($config['resources']) || !is_array($config['resources'])) {
            $this->lookupCache[$requestedName] = false;
            return false;
        }

        $config = $config['resources'];

        if (!isset($config[$requestedName])
            || !isset($config[$requestedName]['path'])
            || !isset($config[$requestedName]['input-filter'])
        ) {
            $this->lookupCache[$requestedName] = false;
            return false;
        }

        $entityClass = str_replace('Resource', 'Entity', $requestedName);
        if (!class_exists($entityClass)) {
            throw new ServiceNotFoundException(sprintf(
                '%s requires that a valid "entity" class be specified for resource %s; no entity found',
                __METHOD__,
                $requestedName
            ));
        }

        $entity = new $entityClass;
        if (!$entity instanceof EntityInterface) {
            throw new ServiceNotFoundException(sprintf(
                'Associated entity %s for %s must be an instance of Zoho\Subscriptions\Entity\EntityInterface.',
                $entityClass,
                $requestedName
            ));
        }

        $this->lookupCache[$requestedName] = true;
        return true;
    }

    /**
     * Create service with name
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @param $name
     * @param $requestedName
     * @return mixed
     */
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $config = $serviceLocator->get('Config');
        $zohoConfig = $config['zoho'];
        $resourceConfig = $config['zoho']['resources'][$requestedName];

        $opensslCapath = ini_get('openssl.capath');

        if (!empty($opensslCapath)) {
            $clientConfig = ['sslcapath' => $opensslCapath];
        } else {
            $clientConfig = ['sslcapath' => $config['ssl_config']['sslcapath']];
        }

        $httpClient = new Client(null, $clientConfig);
        $httpClient->setHeaders(array(
            'Content-Type' => 'application/json;charset=UTF-8',
            'X-com-zoho-subscriptions-organizationid' => $zohoConfig['organization_id'],
            'Authorization' => 'Zoho-authtoken ' . $zohoConfig['auth_token'],
        ));

        $resource = new Resource($httpClient);
        $resource->setPath($resourceConfig['path']);

        $entityClass = str_replace('Resource', 'Entity', $requestedName);
        $resource->setEntityClass($entityClass);

        $inputFilterFactory = new InputFilterFactory();
        $inputFilter = $inputFilterFactory->createInputFilter($resourceConfig['input-filter']);
        $resource->setInputFilter($inputFilter);

        $hydrator = new ClassMethods(true);

        if (isset($resourceConfig['strategies']) && is_array($resourceConfig['strategies'])) {
            foreach ($resourceConfig['strategies'] as $field => $strategy) {
                if ($serviceLocator->has($strategy)) {
                    $hydrator->addStrategy($field, $serviceLocator->get($strategy));
                }
            }
        }

        $resource->setHydrator($hydrator);

        return $resource;
    }
}
