<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetProjectWorkflowsPageData200ApplicationJSONProjectWorkflowBranchDataTrends - Trends aggregated across a workflow or branch for a project.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetProjectWorkflowsPageData200ApplicationJSONProjectWorkflowBranchDataTrends
{
    /**
     * The 95th percentile duration among a group of workflow runs.
     * 
     * @var float $p95DurationSecs
     */
	#[\JMS\Serializer\Annotation\SerializedName('p95_duration_secs')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $p95DurationSecs;
    
    /**
     * The trend value for the success rate.
     * 
     * @var float $successRate
     */
	#[\JMS\Serializer\Annotation\SerializedName('success_rate')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $successRate;
    
    /**
     * The trend value for total credits consumed.
     * 
     * @var float $totalCreditsUsed
     */
	#[\JMS\Serializer\Annotation\SerializedName('total_credits_used')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $totalCreditsUsed;
    
    /**
     * The trend value for total number of runs.
     * 
     * @var float $totalRuns
     */
	#[\JMS\Serializer\Annotation\SerializedName('total_runs')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $totalRuns;
    
	public function __construct()
	{
		$this->p95DurationSecs = 0;
		$this->successRate = 0;
		$this->totalCreditsUsed = 0;
		$this->totalRuns = 0;
	}
}
