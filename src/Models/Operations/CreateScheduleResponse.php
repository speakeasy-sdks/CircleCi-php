<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class CreateScheduleResponse
{
	
    public string $contentType;
    
    /**
     * A schedule object.
     * 
     * @var ?\CircleCi\Models\Operations\CreateScheduleSchedule $schedule
     */
	
    public ?CreateScheduleSchedule $schedule = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\CreateScheduleDefaultApplicationJSON $createScheduleDefaultApplicationJSONObject
     */
	
    public ?CreateScheduleDefaultApplicationJSON $createScheduleDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->schedule = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->createScheduleDefaultApplicationJSONObject = null;
	}
}
