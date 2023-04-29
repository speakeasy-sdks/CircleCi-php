<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * ListSchedulesForProject200ApplicationJSONScheduleTimetable2 - Timetable that specifies when a schedule triggers.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class ListSchedulesForProject200ApplicationJSONScheduleTimetable2
{
    /**
     * Days in a month in which the schedule triggers. This is mutually exclusive with days in a week.
     * 
     * @var array<int> $daysOfMonth
     */
	#[\JMS\Serializer\Annotation\SerializedName('days-of-month')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    public array $daysOfMonth;
    
    /**
     * Days in a week in which the schedule triggers.
     * 
     * @var ?array<\CircleCi\Models\Operations\ListSchedulesForProject200ApplicationJSONScheduleTimetable2DaysOfWeekEnum> $daysOfWeek
     */
	#[\JMS\Serializer\Annotation\SerializedName('days-of-week')]
    #[\JMS\Serializer\Annotation\Type('array<enum<CircleCi\Models\Operations\ListSchedulesForProject200ApplicationJSONScheduleTimetable2DaysOfWeekEnum>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $daysOfWeek = null;
    
    /**
     * Hours in a day in which the schedule triggers.
     * 
     * @var array<int> $hoursOfDay
     */
	#[\JMS\Serializer\Annotation\SerializedName('hours-of-day')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    public array $hoursOfDay;
    
    /**
     * Months in which the schedule triggers.
     * 
     * @var ?array<\CircleCi\Models\Operations\ListSchedulesForProject200ApplicationJSONScheduleTimetable2MonthsEnum> $months
     */
	#[\JMS\Serializer\Annotation\SerializedName('months')]
    #[\JMS\Serializer\Annotation\Type('array<enum<CircleCi\Models\Operations\ListSchedulesForProject200ApplicationJSONScheduleTimetable2MonthsEnum>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $months = null;
    
    /**
     * Number of times a schedule triggers per hour, value must be between 1 and 60
     * 
     * @var int $perHour
     */
	#[\JMS\Serializer\Annotation\SerializedName('per-hour')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $perHour;
    
	public function __construct()
	{
		$this->daysOfMonth = [];
		$this->daysOfWeek = null;
		$this->hoursOfDay = [];
		$this->months = null;
		$this->perHour = 0;
	}
}
