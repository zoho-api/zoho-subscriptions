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
    use TimestampableTrait;

    /**
     * Unique ID generated for an invoice.
     *
     * @var string
     */
    protected $invoiceId;

    /**
     * Unique invoice number (starts with INV) generated for an invoice which will be used
     * to display in interface and invoices.
     *
     * @var string
     */
    protected $number;

    /**
     * Status of the invoice. This can be paid, sent, overdue, partially_paid or void
     *
     * @var string
     */
    protected $status;

    /**
     * The date on which the invoice is raised.
     *
     * @var string
     */
    protected $invoiceDate;

    /**
     * Date on which the invoice is due.
     *
     * @var string
     */
    protected $dueDate;

    /**
     * Customer ID of the customer to whom the invoice is raised.
     *
     * @var string
     */
    protected $customerId;

    /**
     * Name of the customer to whom the invoice is raised.
     *
     * @var string
     */
    protected $customerName;

    /**
     * Email address of the customer.
     *
     * @var string
     */
    protected $email;

    /**
     * The list of items which are all included in the invoice.
     *
     * @var InvoiceItem[]
     */
    protected $invoiceItems;

    /**
     * The list of objects which contains the details of the added coupon.
     *
     * @var array
     */
    protected $coupons;

    /**
     * Total amount to be paid for the invoice. This would be the sum of individual costs of all items
     * involved in the invoice. Total is determined only after customer credits (if any) are applied.
     *
     * @var float
     */
    protected $total;

    /**
     * Payments can be made in multiple instalments. payment_made refers to the amount paid for the invoice
     * in the respective instalment.
     *
     * @var float
     */
    protected $paymentMade;

    /**
     * The unpaid amount of an invoice.
     *
     * @var float
     */
    protected $balance;

    /**
     * Credits applied for the invoice. Any customer credit is automatically applied before computing the
     * total invoice amount.
     *
     * @var float
     */
    protected $creditsApplied;

    /**
     * The unpaid amount of an invoice that is written off.
     *
     * @var float
     */
    protected $writeOffAmount;

    /**
     * List of payment objects.
     *
     * @var Payment[]
     */
    protected $payments;

    /**
     * The customer’s currency code.
     *
     * @var string
     */
    protected $currencyCode;

    /**
     * The customer’s currency symbol.
     *
     * @var string
     */
    protected $currencySymbol;

    /**
     * The email ID from which the invoice is to be mailed.
     *
     * @var string
     */
    protected $fromMailId;

    /**
     * The email IDs to which the invoice is to be mailed.
     *
     * @var array
     */
    protected $toMailIds;

    /**
     * The email IDs that have to be copied when the invoice is to be mailed.
     *
     * @var array
     */
    protected $ccMailIds;

    /**
     * The subject of the email.
     *
     * @var string
     */
    protected $subject;

    /**
     * The body of the email.
     *
     * @var string
     */
    protected $body;

    /**
     * Get the invoiceId
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Set the invoiceId
     *
     * @param string $invoiceId
     * @return Invoice
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * Get the number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the number
     *
     * @param string $number
     * @return Invoice
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Get the status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the status
     *
     * @param string $status
     * @return Invoice
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get the invoiceDate
     *
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set the invoiceDate
     *
     * @param string $invoiceDate
     * @return Invoice
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * Get the dueDate
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set the dueDate
     *
     * @param string $dueDate
     * @return Invoice
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * Get the customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set the customerId
     *
     * @param string $customerId
     * @return Invoice
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * Get the customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set the customerName
     *
     * @param string $customerName
     * @return Invoice
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * Get the email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the email
     *
     * @param string $email
     * @return Invoice
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get the invoiceItems
     *
     * @return array
     */
    public function getInvoiceItems()
    {
        return $this->invoiceItems;
    }

    /**
     * Set the invoiceItems
     *
     * @param array $invoiceItems
     * @return Invoice
     */
    public function setInvoiceItems(array $invoiceItems)
    {
        $this->invoiceItems = $invoiceItems;
        return $this;
    }

    /**
     * Get the coupons
     *
     * @return array
     */
    public function getCoupons()
    {
        return $this->coupons;
    }

    /**
     * Set the coupons
     *
     * @param array $coupons
     * @return Invoice
     */
    public function setCoupons(array $coupons)
    {
        $this->coupons = $coupons;
        return $this;
    }

    /**
     * Get the total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the total
     *
     * @param float $total
     * @return Invoice
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Get the paymentMade
     *
     * @return float
     */
    public function getPaymentMade()
    {
        return $this->paymentMade;
    }

    /**
     * Set the paymentMade
     *
     * @param float $paymentMade
     * @return Invoice
     */
    public function setPaymentMade($paymentMade)
    {
        $this->paymentMade = $paymentMade;
        return $this;
    }

    /**
     * Get the balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the balance
     *
     * @param float $balance
     * @return Invoice
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Get the creditsApplied
     *
     * @return float
     */
    public function getCreditsApplied()
    {
        return $this->creditsApplied;
    }

    /**
     * Set the creditsApplied
     *
     * @param float $creditsApplied
     * @return Invoice
     */
    public function setCreditsApplied($creditsApplied)
    {
        $this->creditsApplied = $creditsApplied;
        return $this;
    }

    /**
     * Get the writeOffAmount
     *
     * @return float
     */
    public function getWriteOffAmount()
    {
        return $this->writeOffAmount;
    }

    /**
     * Set the writeOffAmount
     *
     * @param float $writeOffAmount
     * @return Invoice
     */
    public function setWriteOffAmount($writeOffAmount)
    {
        $this->writeOffAmount = $writeOffAmount;
        return $this;
    }

    /**
     * Get the payments
     *
     * @return array
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Set the payments
     *
     * @param array $payments
     * @return Invoice
     */
    public function setPayments(array $payments)
    {
        $this->payments = $payments;
        return $this;
    }

    /**
     * Get the currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set the currencyCode
     *
     * @param string $currencyCode
     * @return Invoice
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Get the currencySymbol
     *
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    /**
     * Set the currencySymbol
     *
     * @param string $currencySymbol
     * @return Invoice
     */
    public function setCurrencySymbol($currencySymbol)
    {
        $this->currencySymbol = $currencySymbol;
        return $this;
    }

    /**
     * Get the fromMailId
     *
     * @return string
     */
    public function getFromMailId()
    {
        return $this->fromMailId;
    }

    /**
     * Set the fromMailId
     *
     * @param string $fromMailId
     * @return Invoice
     */
    public function setFromMailId($fromMailId)
    {
        $this->fromMailId = $fromMailId;
        return $this;
    }

    /**
     * Get the toMailIds
     *
     * @return array
     */
    public function getToMailIds()
    {
        return $this->toMailIds;
    }

    /**
     * Set the toMailIds
     *
     * @param array $toMailIds
     * @return Invoice
     */
    public function setToMailIds(array $toMailIds)
    {
        $this->toMailIds = $toMailIds;
        return $this;
    }

    /**
     * Get the ccMailIds
     *
     * @return array
     */
    public function getCcMailIds()
    {
        return $this->ccMailIds;
    }

    /**
     * Set the ccMailIds
     *
     * @param array $ccMailIds
     * @return Invoice
     */
    public function setCcMailIds(array $ccMailIds)
    {
        $this->ccMailIds = $ccMailIds;
        return $this;
    }

    /**
     * Get the subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set the subject
     *
     * @param string $subject
     * @return Invoice
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Get the body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the body
     *
     * @param string $body
     * @return Invoice
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }
}
