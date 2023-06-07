<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi;

/**
 * SDK - CircleCI API: This describes the resources that make up the CircleCI API v2.
 * 
 * 
 * # Authentication
 * 
 * <!-- ReDoc-Inject: <security-definitions> -->
 * 
 * @package CircleCi
 * @access public
 */
class SDK
{
	public const SERVERS = [
		'https://circleci.com/api/v2',
	];
  	
	public Context $context;
	
	public Insights $insights;
	
	public Job $job;
	
	public Pipeline $pipeline;
	
	public Project $project;
	
	public Schedule $schedule;
	
	public User $user;
	
	public Webhook $webhook;
	
	public Workflow $workflow;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return SDKBuilder
	 */
	public static function builder(): SDKBuilder
	{
		return new SDKBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->context = new Context($this->sdkConfiguration);
		
		$this->insights = new Insights($this->sdkConfiguration);
		
		$this->job = new Job($this->sdkConfiguration);
		
		$this->pipeline = new Pipeline($this->sdkConfiguration);
		
		$this->project = new Project($this->sdkConfiguration);
		
		$this->schedule = new Schedule($this->sdkConfiguration);
		
		$this->user = new User($this->sdkConfiguration);
		
		$this->webhook = new Webhook($this->sdkConfiguration);
		
		$this->workflow = new Workflow($this->sdkConfiguration);
	}
}