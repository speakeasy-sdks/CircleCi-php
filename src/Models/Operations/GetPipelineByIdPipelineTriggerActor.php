<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetPipelineByIdPipelineTriggerActor - The user who triggered the Pipeline.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetPipelineByIdPipelineTriggerActor
{
    /**
     * URL to the user's avatar on the VCS
     * 
     * @var string $avatarUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('avatar_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $avatarUrl;
    
    /**
     * The login information for the user on the VCS.
     * 
     * @var string $login
     */
	#[\JMS\Serializer\Annotation\SerializedName('login')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $login;
    
	public function __construct()
	{
		$this->avatarUrl = "";
		$this->login = "";
	}
}
