<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetProjectWorkflowsPageData200ApplicationJSONProjectDataMetrics - Metrics aggregated across all workflows and branches for a project.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetProjectWorkflowsPageData200ApplicationJSONProjectDataMetrics
{
	#[\JMS\Serializer\Annotation\SerializedName('success_rate')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $successRate;
    
    /**
     * The average number of runs per day.
     * 
     * @var float $throughput
     */
	#[\JMS\Serializer\Annotation\SerializedName('throughput')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $throughput;
    
    /**
     * The total credits consumed over the current timeseries interval.
     * 
     * @var int $totalCreditsUsed
     */
	#[\JMS\Serializer\Annotation\SerializedName('total_credits_used')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalCreditsUsed;
    
    /**
     * Total duration, in seconds.
     * 
     * @var int $totalDurationSecs
     */
	#[\JMS\Serializer\Annotation\SerializedName('total_duration_secs')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalDurationSecs;
    
    /**
     * The total number of runs.
     * 
     * @var int $totalRuns
     */
	#[\JMS\Serializer\Annotation\SerializedName('total_runs')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalRuns;
    
	public function __construct()
	{
		$this->successRate = 0;
		$this->throughput = 0;
		$this->totalCreditsUsed = 0;
		$this->totalDurationSecs = 0;
		$this->totalRuns = 0;
	}
}
