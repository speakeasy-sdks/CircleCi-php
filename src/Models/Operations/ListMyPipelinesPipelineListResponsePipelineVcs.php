<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * ListMyPipelinesPipelineListResponsePipelineVcs - VCS information for the pipeline.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class ListMyPipelinesPipelineListResponsePipelineVcs
{
    /**
     * The branch where the pipeline ran. The HEAD commit on this branch was used for the pipeline. Note that `branch` and `tag` are mutually exclusive. To trigger a pipeline for a PR by number use `pull/<number>/head` for the PR ref or `pull/<number>/merge` for the merge ref (GitHub only).
     * 
     * @var ?string $branch
     */
	#[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
    /**
     * The latest commit in the pipeline.
     * 
     * @var ?\CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineVcsCommit $commit
     */
	#[\JMS\Serializer\Annotation\SerializedName('commit')]
    #[\JMS\Serializer\Annotation\Type('CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipelineVcsCommit')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListMyPipelinesPipelineListResponsePipelineVcsCommit $commit = null;
    
    /**
     * URL for the repository where the trigger originated. For fork-PR pipelines, this is the URL to the fork. For other pipelines the `origin_` and `target_repository_url`s will be the same.
     * 
     * @var string $originRepositoryUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('origin_repository_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $originRepositoryUrl;
    
    /**
     * Name of the VCS provider (e.g. GitHub, Bitbucket).
     * 
     * @var string $providerName
     */
	#[\JMS\Serializer\Annotation\SerializedName('provider_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $providerName;
    
    /**
     * The code review id.
     * 
     * @var ?string $reviewId
     */
	#[\JMS\Serializer\Annotation\SerializedName('review_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reviewId = null;
    
    /**
     * The code review URL.
     * 
     * @var ?string $reviewUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('review_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reviewUrl = null;
    
    /**
     * The code revision the pipeline ran.
     * 
     * @var string $revision
     */
	#[\JMS\Serializer\Annotation\SerializedName('revision')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $revision;
    
    /**
     * The tag used by the pipeline. The commit that this tag points to was used for the pipeline. Note that `branch` and `tag` are mutually exclusive.
     * 
     * @var ?string $tag
     */
	#[\JMS\Serializer\Annotation\SerializedName('tag')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tag = null;
    
    /**
     * URL for the repository the trigger targets (i.e. the repository where the PR will be merged). For fork-PR pipelines, this is the URL to the parent repo. For other pipelines, the `origin_` and `target_repository_url`s will be the same.
     * 
     * @var string $targetRepositoryUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('target_repository_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $targetRepositoryUrl;
    
	public function __construct()
	{
		$this->branch = null;
		$this->commit = null;
		$this->originRepositoryUrl = "";
		$this->providerName = "";
		$this->reviewId = null;
		$this->reviewUrl = null;
		$this->revision = "";
		$this->tag = null;
		$this->targetRepositoryUrl = "";
	}
}
