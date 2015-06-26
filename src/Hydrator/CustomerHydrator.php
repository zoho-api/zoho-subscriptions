<?php

namespace Zoho\Subscriptions\Hydrator;

use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Zoho\Subscriptions\Hydrator\Strategy\AddressStrategy;

class CustomerHydrator extends ClassMethodsHydrator
{
    public function __construct()
    {
        parent::__construct();

        $addressStrategy = new AddressStrategy();
        $this->addStrategy('billing_address', $addressStrategy);
        $this->addStrategy('shipping_address', $addressStrategy);
    }
}