<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * CreateScheduleScheduleUser - The attribution actor who will run the scheduled pipeline.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class CreateScheduleScheduleUser
{
    /**
     * The unique ID of the user.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The login information for the user on the VCS.
     * 
     * @var string $login
     */
	#[\JMS\Serializer\Annotation\SerializedName('login')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $login;
    
    /**
     * The name of the user.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	public function __construct()
	{
		$this->id = "";
		$this->login = "";
		$this->name = "";
	}
}
