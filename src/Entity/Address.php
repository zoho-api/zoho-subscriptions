<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Entity;

/**
 * Class Address
 *
 * @package Zoho\Subscriptions\Entity
 */
class Address
{
    /**
     * Type of address (billing or shipping)
     *
     * @var string
     */
    protected $type;

    /**
     * Name of the street of the customer’s address.
     *
     * @var string
     */
    protected $street;

    /**
     * Name of the city of the customer’s address.
     *
     * @var string
     */
    protected $city;

    /**
     * Name of the state of the customer’s address.
     *
     * @var string
     */
    protected $state;

    /**
     * Zip code of the customer’s address.
     *
     * @var string
     */
    protected $zip;

    /**
     * Name of the country of the customer’s address.
     *
     * @var string
     */
    protected $country;

    /**
     * Fax number associated with the customer’s address.
     *
     * @var string
     */
    protected $fax;

    /**
     * Get the fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set the fax
     *
     * @param string $fax
     * @return Address
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Get the country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Get the country
     *
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get the zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set the zip
     *
     * @param string $zip
     * @return Address
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * Get the state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the state
     *
     * @param string $state
     * @return Address
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Get the city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get the street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the street
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }
}
