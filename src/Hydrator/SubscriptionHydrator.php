<?php

namespace Zoho\Subscriptions\Hydrator;

use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Zoho\Subscriptions\Hydrator\Strategy\DateTimeFormatterStrategy;

class SubscriptionHydrator extends ClassMethodsHydrator
{
    public function __construct()
    {
        parent::__construct();

        $datetimeStrategy = new DateTimeFormatterStrategy(\DateTime::ISO8601);
        $this->addStrategy('created_time', $datetimeStrategy);
        $this->addStrategy('updated_time', $datetimeStrategy);
    }
}