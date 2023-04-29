<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * UpdateWebhookWebhookScope - The scope in which the relevant events that will trigger webhooks
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class UpdateWebhookWebhookScope
{
    /**
     * ID of the scope being used (at the moment, only project ID is supported)
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * Type of the scope being used
     * 
     * @var string $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $type;
    
	public function __construct()
	{
		$this->id = "";
		$this->type = "";
	}
}
