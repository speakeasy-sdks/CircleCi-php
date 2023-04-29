<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * ListMyPipelinesPipelineListResponsePipelineTrigger - A summary of the trigger.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class ListMyPipelinesPipelineListResponsePipelineTrigger
{
    /**
     * The user who triggered the Pipeline.
     * 
     * @var \CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineTriggerActor $actor
     */
	#[\JMS\Serializer\Annotation\SerializedName('actor')]
    #[\JMS\Serializer\Annotation\Type('CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineTriggerActor')]
    public ListMyPipelinesPipelineListResponsePipelineTriggerActor $actor;
    
    /**
     * The date and time the trigger was received.
     * 
     * @var \DateTime $receivedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('received_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $receivedAt;
    
    /**
     * The type of trigger.
     * 
     * @var \CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineTriggerTypeEnum $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineTriggerTypeEnum>')]
    public ListMyPipelinesPipelineListResponsePipelineTriggerTypeEnum $type;
    
	public function __construct()
	{
		$this->actor = new \CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineTriggerActor();
		$this->receivedAt = new \DateTime();
		$this->type = \CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineTriggerTypeEnum::SCHEDULED_PIPELINE;
	}
}
