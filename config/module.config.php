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
        'ssl_config' => [
            'sslcapath' => '/etc/ssl/certs'
        ],
        'resources' => [
            'Zoho\Subscriptions\Resource\Product' => [
                'path' => '/products',
                'input-filter' => [
                    0 => [
                        'name' => 'name',
                        'required' => true,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                ],
                            ]
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
                        'name' => 'description',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                ],
                            ]
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
                    2 => [
                        'name' => 'emailIds',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                ],
                            ]
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
                    3 => [
                        'name' => 'redirectUrl',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\Uri',
                                'options' => [],
                            ]
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
                    4 => [
                        'name' => 'status',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\InArray',
                                'options' => [
                                    'haystack' => [
                                        0 => 'active',
                                        1 => 'inactive',
                                    ],
                                ],
                            ]
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
                ]
            ],
            'Zoho\Subscriptions\Resource\Plan' => [
                'path' => '/plans',
                'input-filter' => [
                    0 => [
                        'name' => 'name',
                        'required' => true,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                ],
                            ]
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
                        'name' => 'recurringPrice',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\I18n\Validator\IsFloat',
                                'options' => [
                                    'locale' => 'en_US',
                                ],
                            ]
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
                    2 => [
                        'name' => 'interval',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\I18n\Validator\IsInt',
                                'options' => [
                                    'locale' => 'en_US',
                                ],
                            ]
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
                    3 => [
                        'name' => 'intervalUnit',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\InArray',
                                'options' => [
                                    'haystack' => [
                                        0 => 'months',
                                        1 => 'years',
                                    ],
                                ],
                            ],
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
                    4 => [
                        'name' => 'billingCycles',
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
                    5 => [
                        'name' => 'trialPeriod',
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
                    6 => [
                        'name' => 'setupFee',
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
                    7 => [
                        'name' => 'productId',
                        'required' => false,
                        'validators' => [
                            'validators' => [
                                0 => [
                                    'name' => 'Zend\Validator\Digits',
                                ],
                            ],
                            'filters' => [
                                0 => [
                                    'name' => 'Zend\Filter\StringTrim',
                                ],
                                1 => [
                                    'name' => 'Zend\Filter\StripTags',
                                ],
                                2 => [
                                    'name' => 'Zend\Filter\Digits',
                                ],
                            ],
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
                    8 => [
                        'name' => 'taxId',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\Digits',
                            ],
                        ],
                        'filters' => [
                            0 => [
                                'name' => 'Zend\Filter\StringTrim',
                            ],
                            1 => [
                                'name' => 'Zend\Filter\StripTags',
                            ],
                            2 => [
                                'name' => 'Zend\Filter\Digits',
                            ],
                        ],
                    ],
                    9 => [
                        'name' => 'status',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\InArray',
                                'options' => [
                                    'haystack' => [
                                        0 => 'active',
                                        1 => 'inactive',
                                    ],
                                ],
                            ],
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
                        'name' => 'customerId',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\Digits',
                                'options' => [],
                            ],
                        ],
                        'filters' => [
                            0 => [
                                'name' => 'Zend\Filter\StringTrim',
                            ],
                            1 => [
                                'name' => 'Zend\Filter\StripTags',
                            ],
                            2 => [
                                'name' => 'Zend\Filter\Digits',
                                'options' => [],
                            ],
                        ],
                    ],
                    1 => [
                        'name' => 'displayName',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    2 => [
                        'name' => 'firstName',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    3 => [
                        'name' => 'lastName',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    4 => [
                        'name' => 'email',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ],
                            1 => [
                                'name' => 'Zend\Validator\EmailAddress',
                                'options' => [],
                            ]
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
                    5 => [
                        'name' => 'companyName',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    6 => [
                        'name' => 'phone',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    7 => [
                        'name' => 'mobile',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    8 => [
                        'name' => 'website',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\Uri',
                                'options' => [
                                    'allowRelative' => false,
                                ],
                            ]
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
                    9 => [
                        'name' => 'currencyCode',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    10 => [
                        'name' => 'currencySymbol',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    11 => [
                        'name' => 'currencyId',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    12 => [
                        'name' => 'pricePrecision',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\I18n\Validator\IsInt',
                                'options' => [
                                    'locale' => 'en_US',
                                ],
                            ]
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
                    13 => [
                        'name' => 'unusedCredits',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\I18n\Validator\IsFloat',
                                'options' => [
                                    'locale' => 'en_US',
                                ],
                            ]
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
                    14 => [
                        'name' => 'balance',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\I18n\Validator\IsFloat',
                                'options' => [
                                    'locale' => 'en_US',
                                ],
                            ]
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
                    15 => [
                        'name' => 'outstanding',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\I18n\Validator\IsFloat',
                                'options' => [
                                    'locale' => 'en_US',
                                ],
                            ]
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
                    16 => [
                        'name' => 'notes',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                ],
                            ]
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
                    17 => [
                        'name' => 'status',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\InArray',
                                'options' => [
                                    'haystack' => [
                                        0 => 'active',
                                        1 => 'inactive',
                                    ],
                                ],
                            ],
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
            'Zoho\Subscriptions\Resource\ContactPerson' => [
                'path' => '/customers/:customer_id/contactpersons',
                'input-filter' => [
                    0 => [
                        'name' => 'contactpersonId',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\Digits',
                                'options' => [],
                            ],
                        ],
                        'filters' => [
                            0 => [
                                'name' => 'Zend\Filter\StringTrim',
                            ],
                            1 => [
                                'name' => 'Zend\Filter\StripTags',
                            ],
                            2 => [
                                'name' => 'Zend\Filter\Digits',
                                'options' => [],
                            ],
                        ],
                    ],
                    1 => [
                        'name' => 'firstName',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                ],
                            ]
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
                    2 => [
                        'name' => 'lastName',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                ],
                            ]
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
                    3 => [
                        'name' => 'email',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                ],
                            ],
                            1 => [
                                'name' => 'Zend\Validator\EmailAddress',
                                'options' => [],
                            ]
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
                    4 => [
                        'name' => 'phone',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    7 => [
                        'name' => 'mobile',
                        'required' => false,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\StringLength',
                                'options' => [
                                    'min' => 1,
                                    'max' => 255,
                                ],
                            ]
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
                    0 => [
                        'name' => 'customerId',
                        'required' => true,
                        'validators' => [
                            0 => [
                                'name' => 'Zend\Validator\Digits',
                                'options' => [],
                            ],
                        ],
                        'filters' => [
                            0 => [
                                'name' => 'Zend\Filter\StringTrim',
                            ],
                            1 => [
                                'name' => 'Zend\Filter\StripTags',
                            ],
                            2 => [
                                'name' => 'Zend\Filter\Digits',
                                'options' => [],
                            ],
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