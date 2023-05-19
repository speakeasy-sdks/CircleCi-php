<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * ListMyPipelinesPipelineListResponsePipelineErrors - An error with a type and message.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class ListMyPipelinesPipelineListResponsePipelineErrors
{
    /**
     * A human-readable error message.
     * 
     * @var string $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
    /**
     * The type of error.
     * 
     * @var \CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineErrorsType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineErrorsType>')]
    public ListMyPipelinesPipelineListResponsePipelineErrorsType $type;
    
	public function __construct()
	{
		$this->message = "";
		$this->type = \CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineErrorsType::CONFIG;
	}
}
