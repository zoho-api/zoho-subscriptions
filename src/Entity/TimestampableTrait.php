<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Entity;

use DateTime;

/**
 * Trait TimestampableTrait
 *
 * @package Zoho\Subscriptions\Entity
 */
trait TimestampableTrait
{
    /**
     * Time at which the item details were last updated.
     *
     * @var DateTime
     */
    protected $createdTime;

    /**
     * Time at which the item details were last updated.
     *
     * @var DateTime
     */
    protected $updatedTime;

    /**
     * @return DateTime
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * @param DateTime $createdTime
     * @return TimestampableTrait
     */
    public function setCreatedTime(DateTime $createdTime)
    {
        $this->createdTime = $createdTime;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }

    /**
     * @param DateTime $updatedTime
     * @return TimestampableTrait
     */
    public function setUpdatedTime(DateTime $updatedTime)
    {
        $this->updatedTime = $updatedTime;
        return $this;
    }
}
