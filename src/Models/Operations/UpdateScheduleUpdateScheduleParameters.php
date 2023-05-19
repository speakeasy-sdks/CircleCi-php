<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * UpdateScheduleUpdateScheduleParameters - The parameters for an update schedule request
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class UpdateScheduleUpdateScheduleParameters
{
    /**
     * The attribution-actor of the scheduled pipeline.
     * 
     * @var ?\CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersAttributionActor $attributionActor
     */
	#[\JMS\Serializer\Annotation\SerializedName('attribution-actor')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersAttributionActor>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdateScheduleUpdateScheduleParametersAttributionActor $attributionActor = null;
    
    /**
     * Description of the schedule.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * Name of the schedule.
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * Pipeline parameters represented as key-value pairs. Must contain branch or tag.
     * 
     * @var ?array<string, mixed> $parameters
     */
	#[\JMS\Serializer\Annotation\SerializedName('parameters')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $parameters = null;
    
    /**
     * Timetable that specifies when a schedule triggers.
     * 
     * @var ?\CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersTimetable $timetable
     */
	#[\JMS\Serializer\Annotation\SerializedName('timetable')]
    #[\JMS\Serializer\Annotation\Type('CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersTimetable')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdateScheduleUpdateScheduleParametersTimetable $timetable = null;
    
	public function __construct()
	{
		$this->attributionActor = null;
		$this->description = null;
		$this->name = null;
		$this->parameters = null;
		$this->timetable = null;
	}
}
