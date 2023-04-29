<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetJobDetailsJobDetailsOrganization - Information about an organization.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetJobDetailsJobDetailsOrganization
{
    /**
     * The name of the organization.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	public function __construct()
	{
		$this->name = "";
	}
}
