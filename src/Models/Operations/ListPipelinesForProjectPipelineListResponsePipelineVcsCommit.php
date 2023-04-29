<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * ListPipelinesForProjectPipelineListResponsePipelineVcsCommit - The latest commit in the pipeline.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class ListPipelinesForProjectPipelineListResponsePipelineVcsCommit
{
    /**
     * The body of the commit message.
     * 
     * @var string $body
     */
	#[\JMS\Serializer\Annotation\SerializedName('body')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $body;
    
    /**
     * The subject of the commit message.
     * 
     * @var string $subject
     */
	#[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $subject;
    
	public function __construct()
	{
		$this->body = "";
		$this->subject = "";
	}
}
