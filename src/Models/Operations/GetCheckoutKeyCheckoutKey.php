<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetCheckoutKeyCheckoutKey - The checkout key.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetCheckoutKeyCheckoutKey
{
    /**
     * The date and time the checkout key was created.
     * 
     * @var \DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created-at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * An SSH key fingerprint.
     * 
     * @var string $fingerprint
     */
	#[\JMS\Serializer\Annotation\SerializedName('fingerprint')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $fingerprint;
    
    /**
     * A boolean value that indicates if this key is preferred.
     * 
     * @var bool $preferred
     */
	#[\JMS\Serializer\Annotation\SerializedName('preferred')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $preferred;
    
    /**
     * A public SSH key.
     * 
     * @var string $publicKey
     */
	#[\JMS\Serializer\Annotation\SerializedName('public-key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $publicKey;
    
    /**
     * The type of checkout key. This may be either `deploy-key` or `github-user-key`.
     * 
     * @var \CircleCi\Models\Operations\GetCheckoutKeyCheckoutKeyCheckoutKeyType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\GetCheckoutKeyCheckoutKeyCheckoutKeyType>')]
    public GetCheckoutKeyCheckoutKeyCheckoutKeyType $type;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->fingerprint = "";
		$this->preferred = false;
		$this->publicKey = "";
		$this->type = \CircleCi\Models\Operations\GetCheckoutKeyCheckoutKeyCheckoutKeyType::DEPLOY_KEY;
	}
}
