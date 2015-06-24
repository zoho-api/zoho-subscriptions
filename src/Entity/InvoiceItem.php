<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Entity;

/**
 * Class InvoiceItem
 *
 * @package Zoho\Subscriptions\Entity
 */
class InvoiceItem
{
    /**
     * The ID of the item included in the invoice.
     *
     * @var string
     */
    protected $itemId;

    /**
     * Name of the item included in the invoice.
     *
     * @var string
     */
    protected $name;

    /**
     * The Tax id of the tax which has been applied to the item.
     *
     * @var string
     */
    protected $taxId;

    /**
     * Item code of the item included in the invoice.
     *
     * @var string
     */
    protected $code;

    /**
     * Price of the item included in the invoice.
     *
     * @var string
     */
    protected $price;

    /**
     * Quantity of the item included in the invoice.
     *
     * @var integer
     */
    protected $quantity;

    /**
     * Cost of an item included in the invoice. This would be the product of
     * quantity of the item included and the price of that item.
     *
     * @var integer
     */
    protected $itemTotal;

    /**
     * Get the itemId
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set the itemId
     *
     * @param string $itemId
     * @return InvoiceItem
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Get the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the name
     *
     * @param string $name
     * @return InvoiceItem
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the taxId
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Set the taxId
     *
     * @param string $taxId
     * @return InvoiceItem
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;
        return $this;
    }

    /**
     * Get the code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the code
     *
     * @param string $code
     * @return InvoiceItem
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Get the price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the price
     *
     * @param string $price
     * @return InvoiceItem
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get the quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the quantity
     *
     * @param int $quantity
     * @return InvoiceItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get the itemTotal
     *
     * @return int
     */
    public function getItemTotal()
    {
        return $this->itemTotal;
    }

    /**
     * Set the itemTotal
     *
     * @param int $itemTotal
     * @return InvoiceItem
     */
    public function setItemTotal($itemTotal)
    {
        $this->itemTotal = $itemTotal;
        return $this;
    }

}
