<?php

namespace Zoho\Subscriptions\Hydrator;

use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Zend\Stdlib\Hydrator\Strategy\DateTimeFormatterStrategy;
use Zoho\Subscriptions\Hydrator\Strategy\AddressStrategy;

class CustomerHydrator extends ClassMethodsHydrator
{
    public function __construct()
    {
        parent::__construct();

        $addressStrategy = new AddressStrategy();
        $datetimeStrategy = new DateTimeFormatterStrategy(\DateTime::ISO8601);
        $this->addStrategy('billing_address', $addressStrategy);
        $this->addStrategy('shipping_address', $addressStrategy);
        $this->addStrategy('created_time', $datetimeStrategy);
        $this->addStrategy('updated_time', $datetimeStrategy);
    }
}