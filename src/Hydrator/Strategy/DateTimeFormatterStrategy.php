<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Hydrator\Strategy;

use DateTime;
use DateTimeZone;
use Zend\Stdlib\Hydrator\Strategy\StrategyInterface;

class DateTimeFormatterStrategy implements StrategyInterface
{
    /**
     * @var string
     */
    protected $format;

    /**
     * @var DateTimeZone|null
     */
    protected $timezone;

    /**
     * Constructor
     *
     * @param string            $format
     * @param DateTimeZone|null $timezone
     */
    public function __construct($format = DateTime::RFC3339, DateTimeZone $timezone = null)
    {
        $this->format   = (string) $format;
        $this->timezone = $timezone;
    }

    /**
     * {@inheritDoc}
     *
     * Converts to date time string
     *
     * @param mixed|DateTime $value
     *
     * @return mixed|string
     */
    public function extract($value)
    {
        if ($value instanceof DateTime) {
            return $value->format($this->format);
        }

        return $value;
    }

    /**
     * Converts date time string to DateTime instance for injecting to object
     *
     * {@inheritDoc}
     *
     * @param mixed|string $value
     *
     * @return mixed|DateTime
     */
    public function hydrate($value)
    {
        error_log($value);

        if ($value === '' || $value === null) {
            return;
        }

        if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $value)) {
            $this->format = 'Y-m-d';
        }

        if ($this->timezone) {
            $hydrated = DateTime::createFromFormat($this->format, $value, $this->timezone);
        } else {
            $hydrated = DateTime::createFromFormat($this->format, $value);
        }

        return $hydrated ?: $value;
    }
}