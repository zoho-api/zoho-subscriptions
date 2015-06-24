<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Entity;

/**
 * Class Card
 *
 * @package Zoho\Subscriptions\Entity
 */
class Card
{
    /**
     * Payment gateway through which payment needs to be made.
     *
     * @var string
     */
    protected $paymentGateway;

    /**
     * Customer’s card ID.
     *
     * @var string
     */
    protected $cardId;

    /**
     * Last four digits of the customer’s card.
     *
     * @var integer
     */
    protected $lastFourDigits;

    /**
     * Expiry month of the customer’s card.
     *
     * @var integer
     */
    protected $expiryMonth;

    /**
     * Expiry year of the customer’s card.
     *
     * @var integer
     */
    protected $expiryYear;

    /**
     * Get the payment gateway
     *
     * @return string
     */
    public function getPaymentGateway()
    {
        return $this->paymentGateway;
    }

    /**
     * Set the payment gateway
     *
     * @param string $paymentGateway
     * @return Card
     */
    public function setPaymentGateway($paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
        return $this;
    }

    /**
     * Get card ID
     *
     * @return string
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * Set card ID
     *
     * @param string $cardId
     * @return Card
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;
        return $this;
    }

    /**
     * Get the last four digits
     * @return int
     */
    public function getLastFourDigits()
    {
        return $this->lastFourDigits;
    }

    /**
     * Set the last four digits
     *
     * @param int $lastFourDigits
     * @return Card
     */
    public function setLastFourDigits($lastFourDigits)
    {
        $this->lastFourDigits = $lastFourDigits;
        return $this;
    }

    /**
     * Get expiry month
     *
     * @return int
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * Set expiry month
     *
     * @param int $expiryMonth
     * @return Card
     */
    public function setExpiryMonth($expiryMonth)
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }

    /**
     * Get expiry year
     *
     * @return int
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * Set expiry year
     *
     * @param int $expiryYear
     * @return Card
     */
    public function setExpiryYear($expiryYear)
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }
}
