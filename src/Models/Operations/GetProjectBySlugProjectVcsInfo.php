<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetProjectBySlugProjectVcsInfo - Information about the VCS that hosts the project source code.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetProjectBySlugProjectVcsInfo
{
	#[\JMS\Serializer\Annotation\SerializedName('default_branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $defaultBranch;
    
    /**
     * The VCS provider
     * 
     * @var \CircleCi\Models\Operations\GetProjectBySlugProjectVcsInfoProvider $provider
     */
	#[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\GetProjectBySlugProjectVcsInfoProvider>')]
    public GetProjectBySlugProjectVcsInfoProvider $provider;
    
    /**
     * URL to the repository hosting the project's code
     * 
     * @var string $vcsUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('vcs_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $vcsUrl;
    
	public function __construct()
	{
		$this->defaultBranch = "";
		$this->provider = \CircleCi\Models\Operations\GetProjectBySlugProjectVcsInfoProvider::BITBUCKET;
		$this->vcsUrl = "";
	}
}
