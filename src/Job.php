<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi;

class Job 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
	
    /**
     * Cancel job
     * 
     * Cancel job with a given job number.
     * 
     * @param \CircleCi\Models\Operations\CancelJobRequest $request
     * @return \CircleCi\Models\Operations\CancelJobResponse
     */
	
    public function cancelJob(
        \CircleCi\Models\Operations\CancelJobRequest $request,
    ): \CircleCi\Models\Operations\CancelJobResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/job/{job-number}/cancel', \CircleCi\Models\Operations\CancelJobRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\CancelJobResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messageResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\CancelJobMessageResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->cancelJobDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\CancelJobDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a job's artifacts
     * 
     * Returns a job's artifacts.
     * 
     * @param \CircleCi\Models\Operations\GetJobArtifactsRequest $request
     * @return \CircleCi\Models\Operations\GetJobArtifactsResponse
     */
	
    public function getJobArtifacts(
        \CircleCi\Models\Operations\GetJobArtifactsRequest $request,
    ): \CircleCi\Models\Operations\GetJobArtifactsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/{job-number}/artifacts', \CircleCi\Models\Operations\GetJobArtifactsRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetJobArtifactsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->artifactListResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetJobArtifactsArtifactListResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getJobArtifactsDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetJobArtifactsDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get job details
     * 
     * Returns job details.
     * 
     * @param \CircleCi\Models\Operations\GetJobDetailsRequest $request
     * @return \CircleCi\Models\Operations\GetJobDetailsResponse
     */
	
    public function getJobDetails(
        \CircleCi\Models\Operations\GetJobDetailsRequest $request,
    ): \CircleCi\Models\Operations\GetJobDetailsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/job/{job-number}', \CircleCi\Models\Operations\GetJobDetailsRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetJobDetailsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->jobDetails = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetJobDetailsJobDetails', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getJobDetailsDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetJobDetailsDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get test metadata
     * 
     * Get test metadata for a build. In the rare case where there is more than 250MB of test data on the job, no results will be returned.
     * 
     * @param \CircleCi\Models\Operations\GetTestsRequest $request
     * @return \CircleCi\Models\Operations\GetTestsResponse
     */
	
    public function getTests(
        \CircleCi\Models\Operations\GetTestsRequest $request,
    ): \CircleCi\Models\Operations\GetTestsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/{job-number}/tests', \CircleCi\Models\Operations\GetTestsRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetTestsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->testsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetTestsTestsResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getTestsDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetTestsDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
}