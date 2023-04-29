<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * RerunWorkflow202ApplicationJSON - A response to rerunning a workflow
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class RerunWorkflow202ApplicationJSON
{
    /**
     * The ID of the newly-created workflow.
     * 
     * @var string $workflowId
     */
	#[\JMS\Serializer\Annotation\SerializedName('workflow_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workflowId;
    
	public function __construct()
	{
		$this->workflowId = "";
	}
}
