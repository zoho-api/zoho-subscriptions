<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Entity;

/**
 * Trait StatusTrait
 *
 * @package Zoho\Subscriptions\Entity
 */
trait StatusTrait
{
    /**
     * Status of the item. It can either be active or inactive.
     *
     * @var boolean
     */
    protected $status;

    /**
     * Get the status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the status
     *
     * @param boolean $status
     * @return StatusTrait
     */
    public function setStatus($status)
    {
        $this->status = (bool)$status;
        return $this;
    }

    /**
     * Is item active
     *
     * @return bool
     */
    public function isActive()
    {
        return ($this->status == 'active');
    }
}
