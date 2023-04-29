<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class ListWorkflowsByPipelineIdResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * A paginated list of workflow objects.
     * 
     * @var ?\CircleCi\Models\Operations\ListWorkflowsByPipelineIdWorkflowListResponse $workflowListResponse
     */
	
    public ?ListWorkflowsByPipelineIdWorkflowListResponse $workflowListResponse = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\ListWorkflowsByPipelineIdDefaultApplicationJSON $listWorkflowsByPipelineIdDefaultApplicationJSONObject
     */
	
    public ?ListWorkflowsByPipelineIdDefaultApplicationJSON $listWorkflowsByPipelineIdDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->workflowListResponse = null;
		$this->listWorkflowsByPipelineIdDefaultApplicationJSONObject = null;
	}
}
