<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetJobTimeseries200ApplicationJSON - Project level timeseries metrics response
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetJobTimeseries200ApplicationJSON
{
    /**
     * Aggregate metrics for a workflow at a time granularity
     * 
     * @var array<\CircleCi\Models\Operations\GetJobTimeseries200ApplicationJSONItems> $items
     */
	#[\JMS\Serializer\Annotation\SerializedName('items')]
    #[\JMS\Serializer\Annotation\Type('array<CircleCi\Models\Operations\GetJobTimeseries200ApplicationJSONItems>')]
    public array $items;
    
    /**
     * A token to pass as a `page-token` query parameter to return the next page of results.
     * 
     * @var string $nextPageToken
     */
	#[\JMS\Serializer\Annotation\SerializedName('next_page_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $nextPageToken;
    
	public function __construct()
	{
		$this->items = [];
		$this->nextPageToken = "";
	}
}
