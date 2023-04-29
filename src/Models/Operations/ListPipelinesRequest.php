<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;

use \CircleCi\Utils\SpeakeasyMetadata;
class ListPipelinesRequest
{
    /**
     * Only include entries created by your user.
     * 
     * @var ?bool $mine
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=mine')]
    public ?bool $mine = null;
    
    /**
     * Org slug in the form `vcs-slug/org-name`
     * 
     * @var ?string $orgSlug
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=org-slug')]
    public ?string $orgSlug = null;
    
    /**
     * A token to retrieve the next page of results.
     * 
     * @var ?string $pageToken
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page-token')]
    public ?string $pageToken = null;
    
	public function __construct()
	{
		$this->mine = null;
		$this->orgSlug = null;
		$this->pageToken = null;
	}
}
