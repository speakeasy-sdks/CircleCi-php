<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class GetProjectBySlugResponse
{
	
    public string $contentType;
    
    /**
     * A project object
     * 
     * @var ?\CircleCi\Models\Operations\GetProjectBySlugProject $project
     */
	
    public ?GetProjectBySlugProject $project = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\GetProjectBySlugDefaultApplicationJSON $getProjectBySlugDefaultApplicationJSONObject
     */
	
    public ?GetProjectBySlugDefaultApplicationJSON $getProjectBySlugDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->project = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getProjectBySlugDefaultApplicationJSONObject = null;
	}
}
