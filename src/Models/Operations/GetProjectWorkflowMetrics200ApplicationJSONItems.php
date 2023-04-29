<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class GetProjectWorkflowMetrics200ApplicationJSONItems
{
    /**
     * Metrics relating to a workflow's runs.
     * 
     * @var \CircleCi\Models\Operations\GetProjectWorkflowMetrics200ApplicationJSONItemsMetrics $metrics
     */
	#[\JMS\Serializer\Annotation\SerializedName('metrics')]
    #[\JMS\Serializer\Annotation\Type('CircleCi\Models\Operations\GetProjectWorkflowMetrics200ApplicationJSONItemsMetrics')]
    public GetProjectWorkflowMetrics200ApplicationJSONItemsMetrics $metrics;
    
    /**
     * The name of the workflow.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The end of the aggregation window for workflow metrics.
     * 
     * @var \DateTime $windowEnd
     */
	#[\JMS\Serializer\Annotation\SerializedName('window_end')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $windowEnd;
    
    /**
     * The start of the aggregation window for workflow metrics.
     * 
     * @var \DateTime $windowStart
     */
	#[\JMS\Serializer\Annotation\SerializedName('window_start')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $windowStart;
    
	public function __construct()
	{
		$this->metrics = new \CircleCi\Models\Operations\GetProjectWorkflowMetrics200ApplicationJSONItemsMetrics();
		$this->name = "";
		$this->windowEnd = new \DateTime();
		$this->windowStart = new \DateTime();
	}
}
