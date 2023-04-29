<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetEnvVarEnvironmentVariablePair - The environment variable.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetEnvVarEnvironmentVariablePair
{
    /**
     * The name of the environment variable.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The value of the environment variable.
     * 
     * @var string $value
     */
	#[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $value;
    
	public function __construct()
	{
		$this->name = "";
		$this->value = "";
	}
}
