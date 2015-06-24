<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Entity;

/**
 * Class Invoice
 *
 * @package Zoho\Subscriptions\Entity
 */
class Invoice implements EntityInterface
{
    protected $invoiceId;

    protected $number;

    protected $status;

    protected $invoiceDate;

    protected $dueDate;

    protected $customerId;

    protected $customerName;

    protected $email;

    /**
     * @var array
     */
    protected $invoiceItems;


}