<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class ListPipelinesForProjectResponse
{
	
    public string $contentType;
    
    /**
     * A sequence of pipelines.
     * 
     * @var ?\CircleCi\Models\Operations\ListPipelinesForProjectPipelineListResponse $pipelineListResponse
     */
	
    public ?ListPipelinesForProjectPipelineListResponse $pipelineListResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\ListPipelinesForProjectDefaultApplicationJSON $listPipelinesForProjectDefaultApplicationJSONObject
     */
	
    public ?ListPipelinesForProjectDefaultApplicationJSON $listPipelinesForProjectDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->pipelineListResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->listPipelinesForProjectDefaultApplicationJSONObject = null;
	}
}
