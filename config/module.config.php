<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

return [
    'service_manager' => [
        'invokables' => [
            'Zoho\Subscriptions\Hydrator\Strategy\AddressStrategy' => 'Zoho\Subscriptions\Hydrator\Strategy\AddressStrategy',
        ],
        'abstract_factories' => [
            'Zoho\Subscriptions\Factory\ResourceAbstractFactory'
        ],
    ],
    'zoho' => [
        'resources' => [
            'Zoho\Subscriptions\Resource\Product' => [
                'path' => '/products',
                'input-filter' => [
                    0 => [
                        'name' => '',
                        'required' => true,
                        'validators' => [

                        ],
                        'filters' => [

                        ],
                    ],
                ]
            ],
            'Zoho\Subscriptions\Resource\Plan' => [
                'path' => '/plans',
                'input-filter' => [
                    0 => [
                        'name' => '',
                        'required' => true,
                        'validators' => [

                        ],
                        'filters' => [

                        ],
                    ],
                ]
            ],
            'Zoho\Subscriptions\Resource\Addon' => [
                'path' => '/addons',
                'input-filter' => [
                    0 => [
                        'name' => '',
                        'required' => true,
                        'validators' => [

                        ],
                        'filters' => [

                        ],
                    ],
                ]
            ],
            'Zoho\Subscriptions\Resource\Coupon' => [
                'path' => '/coupons',
                'input-filter' => [
                    0 => [
                        'name' => '',
                        'required' => true,
                        'validators' => [

                        ],
                        'filters' => [

                        ],
                    ],
                ]
            ],
            'Zoho\Subscriptions\Resource\Customer' => [
                'path' => '/customers',
                'input-filter' => [
                    0 => [
                        'name' => 'customer_id',
                        'required' => false,
                        'validators' => [

                        ],
                        'filters' => [
                            0 => [
                                'name' => 'Zend\Filter\StringTrim',
                            ],
                            1 => [
                                'name' => 'Zend\Filter\StripTags',
                            ],
                        ],
                    ],
                    1 => [
                        'name' => 'display_name',
                        'required' => false,
                        'validators' => [

                        ],
                        'filters' => [
                            0 => [
                                'name' => 'Zend\Filter\StringTrim',
                            ],
                            1 => [
                                'name' => 'Zend\Filter\StripTags',
                            ],
                        ],
                    ],
                ],

                'strategies' => [
                    'billing_address' => 'Zoho\Subscriptions\Hydrator\Strategy\AddressStrategy',
                    'shipping_address' => 'Zoho\Subscriptions\Hydrator\Strategy\AddressStrategy',
                ]
            ],
            'Zoho\Subscriptions\Resource\Contact' => [
                'path' => '/customers/:customer_id/contactpersons',
                'input-filter' => [
                    0 => [
                        'name' => '',
                        'required' => true,
                        'validators' => [

                        ],
                        'filters' => [

                        ],
                    ],
                ]
            ],
            'Zoho\Subscriptions\Resource\Subscription' => [
                'path' => '/subscriptions',
                'input-filter' => [
                    0 => [
                        'name' => '',
                        'required' => true,
                        'validators' => [

                        ],
                        'filters' => [

                        ],
                    ],
                ]
            ],
            'Zoho\Subscriptions\Resource\Invoice' => [
                'path' => '/invoices',
                'input-filter' => [
                    0 => [
                        'name' => '',
                        'required' => true,
                        'validators' => [

                        ],
                        'filters' => [

                        ],
                    ],
                ]
            ],
            'Zoho\Subscriptions\Resource\Payment' => [
                'path' => '/payments',
                'input-filter' => [
                    0 => [
                        'name' => '',
                        'required' => true,
                        'validators' => [

                        ],
                        'filters' => [

                        ],
                    ],
                ]
            ],
            'Zoho\Subscriptions\Resource\HostedPage' => [
                'path' => '/hostedpages',
                'input-filter' => [
                    0 => [
                        'name' => '',
                        'required' => true,
                        'validators' => [

                        ],
                        'filters' => [

                        ],
                    ],
                ]
            ],

        ]
    ]
];