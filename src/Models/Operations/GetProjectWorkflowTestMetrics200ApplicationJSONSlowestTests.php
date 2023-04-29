<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class GetProjectWorkflowTestMetrics200ApplicationJSONSlowestTests
{
    /**
     * The class the test belongs to.
     * 
     * @var string $classname
     */
	#[\JMS\Serializer\Annotation\SerializedName('classname')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $classname;
    
    /**
     * The number of times the test failed
     * 
     * @var int $failedRuns
     */
	#[\JMS\Serializer\Annotation\SerializedName('failed_runs')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $failedRuns;
    
    /**
     * The file the test belongs to.
     * 
     * @var string $file
     */
	#[\JMS\Serializer\Annotation\SerializedName('file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $file;
    
    /**
     * Whether the test is flaky.
     * 
     * @var bool $flaky
     */
	#[\JMS\Serializer\Annotation\SerializedName('flaky')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $flaky;
    
    /**
     * The name of the job.
     * 
     * @var string $jobName
     */
	#[\JMS\Serializer\Annotation\SerializedName('job_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $jobName;
    
    /**
     * The 95th percentile duration, in seconds, among a group of test runs.
     * 
     * @var float $p95Duration
     */
	#[\JMS\Serializer\Annotation\SerializedName('p95_duration')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $p95Duration;
    
    /**
     * The source of the test.
     * 
     * @var string $source
     */
	#[\JMS\Serializer\Annotation\SerializedName('source')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $source;
    
    /**
     * The name of the test.
     * 
     * @var string $testName
     */
	#[\JMS\Serializer\Annotation\SerializedName('test_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $testName;
    
    /**
     * The total number of times the test was run.
     * 
     * @var int $totalRuns
     */
	#[\JMS\Serializer\Annotation\SerializedName('total_runs')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalRuns;
    
	public function __construct()
	{
		$this->classname = "";
		$this->failedRuns = 0;
		$this->file = "";
		$this->flaky = false;
		$this->jobName = "";
		$this->p95Duration = 0;
		$this->source = "";
		$this->testName = "";
		$this->totalRuns = 0;
	}
}
