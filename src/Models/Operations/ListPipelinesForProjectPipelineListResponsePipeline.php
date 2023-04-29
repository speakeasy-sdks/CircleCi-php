<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * ListPipelinesForProjectPipelineListResponsePipeline - A pipeline response.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class ListPipelinesForProjectPipelineListResponsePipeline
{
    /**
     * The date and time the pipeline was created.
     * 
     * @var \DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * A sequence of errors that have occurred within the pipeline.
     * 
     * @var array<\CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponsePipelineErrors> $errors
     */
	#[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponsePipelineErrors>')]
    public array $errors;
    
    /**
     * The unique ID of the pipeline.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The number of the pipeline.
     * 
     * @var int $number
     */
	#[\JMS\Serializer\Annotation\SerializedName('number')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $number;
    
    /**
     * The project-slug for the pipeline.
     * 
     * @var string $projectSlug
     */
	#[\JMS\Serializer\Annotation\SerializedName('project_slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $projectSlug;
    
    /**
     * The current state of the pipeline.
     * 
     * @var \CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponsePipelineStateEnum $state
     */
	#[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponsePipelineStateEnum>')]
    public ListPipelinesForProjectPipelineListResponsePipelineStateEnum $state;
    
    /**
     * A summary of the trigger.
     * 
     * @var \CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponsePipelineTrigger $trigger
     */
	#[\JMS\Serializer\Annotation\SerializedName('trigger')]
    #[\JMS\Serializer\Annotation\Type('CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponsePipelineTrigger')]
    public ListPipelinesForProjectPipelineListResponsePipelineTrigger $trigger;
    
    /**
     * $triggerParameters
     * 
     * @var ?array<string, mixed> $triggerParameters
     */
	#[\JMS\Serializer\Annotation\SerializedName('trigger_parameters')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $triggerParameters = null;
    
    /**
     * The date and time the pipeline was last updated.
     * 
     * @var ?\DateTime $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
    /**
     * VCS information for the pipeline.
     * 
     * @var ?\CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponsePipelineVcs $vcs
     */
	#[\JMS\Serializer\Annotation\SerializedName('vcs')]
    #[\JMS\Serializer\Annotation\Type('CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponsePipelineVcs')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListPipelinesForProjectPipelineListResponsePipelineVcs $vcs = null;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->errors = [];
		$this->id = "";
		$this->number = 0;
		$this->projectSlug = "";
		$this->state = \CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponsePipelineStateEnum::CREATED;
		$this->trigger = new \CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponsePipelineTrigger();
		$this->triggerParameters = null;
		$this->updatedAt = null;
		$this->vcs = null;
	}
}
