<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetJobTimeseries200ApplicationJSONItemsMetricsDurationMetrics - Metrics relating to the duration of runs for a workflow.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetJobTimeseries200ApplicationJSONItemsMetricsDurationMetrics
{
    /**
     * The max duration, in seconds, among a group of runs.
     * 
     * @var int $max
     */
	#[\JMS\Serializer\Annotation\SerializedName('max')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $max;
    
    /**
     * The median duration, in seconds, among a group of runs.
     * 
     * @var int $median
     */
	#[\JMS\Serializer\Annotation\SerializedName('median')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $median;
    
    /**
     * The minimum duration, in seconds, among a group of runs.
     * 
     * @var int $min
     */
	#[\JMS\Serializer\Annotation\SerializedName('min')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $min;
    
    /**
     * The 95th percentile duration, in seconds, among a group of runs.
     * 
     * @var int $p95
     */
	#[\JMS\Serializer\Annotation\SerializedName('p95')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $p95;
    
    /**
     * The total duration, in seconds, added across a group of runs.
     * 
     * @var int $total
     */
	#[\JMS\Serializer\Annotation\SerializedName('total')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $total;
    
	public function __construct()
	{
		$this->max = 0;
		$this->median = 0;
		$this->min = 0;
		$this->p95 = 0;
		$this->total = 0;
	}
}
