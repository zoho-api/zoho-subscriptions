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
    /**
     *
     *
     * @var string
     */
    protected $invoiceId;

    /**
     *
     *
     * @var string
     */
    protected $number;

    /**
     *
     *
     * @var string
     */
    protected $status;

    /**
     *
     *
     * @var string
     */
    protected $invoiceDate;

    /**
     *
     *
     * @var string
     */
    protected $dueDate;

    /**
     *
     *
     * @var string
     */
    protected $customerId;

    /**
     *
     *
     * @var string
     */
    protected $customerName;

    /**
     *
     *
     * @var string
     */
    protected $email;

    /**
     *
     *
     * @var InvoiceItem[]
     */
    protected $invoiceItems;

    protected $total;

    protected $paymentMade;

    protected $balance;

    protected $creditsApplied;

    protected $writeOffAmount;
}
