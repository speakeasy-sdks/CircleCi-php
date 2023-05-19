<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class GetProjectWorkflowRuns200ApplicationJSONItems
{
    /**
     * The VCS branch of a Workflow's trigger.
     * 
     * @var string $branch
     */
	#[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $branch;
    
    /**
     * The date and time the workflow was created.
     * 
     * @var \DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * The number of credits used during execution. Note that Insights is not a real time financial reporting tool and should not be used for credit reporting.
     * 
     * @var int $creditsUsed
     */
	#[\JMS\Serializer\Annotation\SerializedName('credits_used')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $creditsUsed;
    
    /**
     * The duration in seconds of a run.
     * 
     * @var int $duration
     */
	#[\JMS\Serializer\Annotation\SerializedName('duration')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $duration;
    
    /**
     * The unique ID of the workflow.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * Workflow status.
     * 
     * @var \CircleCi\Models\Operations\GetProjectWorkflowRuns200ApplicationJSONItemsStatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\GetProjectWorkflowRuns200ApplicationJSONItemsStatus>')]
    public GetProjectWorkflowRuns200ApplicationJSONItemsStatus $status;
    
    /**
     * The date and time the workflow stopped.
     * 
     * @var \DateTime $stoppedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('stopped_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $stoppedAt;
    
	public function __construct()
	{
		$this->branch = "";
		$this->createdAt = new \DateTime();
		$this->creditsUsed = 0;
		$this->duration = 0;
		$this->id = "";
		$this->status = \CircleCi\Models\Operations\GetProjectWorkflowRuns200ApplicationJSONItemsStatus::SUCCESS;
		$this->stoppedAt = new \DateTime();
	}
}
