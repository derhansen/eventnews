<?php

namespace GeorgRinger\Eventnews\Domain\Model\Dto;

class Demand extends \GeorgRinger\News\Domain\Model\Dto\NewsDemand
{
    const EVENT_RESTRICTION_ONLY_EVENTS = 1;
    const EVENT_RESTRICTION_NO_EVENTS = 2;

    /** @var array */
    protected $locations;

    /** @var array */
    protected $organizers;

    /** @var int */
    protected $eventRestriction;

    /** @var int */
    protected $day;

    /** @var string */
    protected $searchDateFrom;

    /** @var string */
    protected $searchDateTo;

    public function __construct(array $settings = null)
    {
        $this->eventRestriction = $settings['eventRestriction'];
    }

    /**
     * @return array
     */
    public function getOrganizers()
    {
        return $this->getNonEmptyArrayValues($this->organizers);
    }

    /**
     * @param array $organizers
     */
    public function setOrganizers($organizers)
    {
        $this->organizers = $organizers;
    }

    /**
     * @return array
     */
    public function getLocations()
    {
        return $this->getNonEmptyArrayValues($this->locations);
    }

    /**
     * @param array $locations
     */
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }

    /**
     * @return int
     */
    public function getEventRestriction()
    {
        return (int)$this->eventRestriction;
    }

    /**
     * @param int $eventRestriction
     */
    public function setEventRestriction($eventRestriction)
    {
        $this->eventRestriction = $eventRestriction;
    }

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param int $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return string
     */
    public function getSearchDateTo()
    {
        return $this->searchDateTo;
    }

    /**
     * @param string $searchDateTo
     */
    public function setSearchDateTo($searchDateTo)
    {
        $this->searchDateTo = $searchDateTo;
    }

    /**
     * @return string
     */
    public function getSearchDateFrom()
    {
        return $this->searchDateFrom;
    }

    /**
     * @param string $searchDateFrom
     */
    public function setSearchDateFrom($searchDateFrom)
    {
        $this->searchDateFrom = $searchDateFrom;
    }

    /**
     * Remove empty value entries
     *
     * @param $array
     * @return array
     */
    public function getNonEmptyArrayValues($array)
    {
        $out = [];
        if (is_array($array)) {
            foreach ($array as $k => $v) {
                if (!empty($v)) {
                    $out[$k] = $v;
                }
            }
        }
        return $out;
    }
}
