<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi;

class Workflow 
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
     * Approve a job
     * 
     * Approves a pending approval job in a workflow.
     * 
     * @param \CircleCi\Models\Operations\ApprovePendingApprovalJobByIdRequest $request
     * @return \CircleCi\Models\Operations\ApprovePendingApprovalJobByIdResponse
     */
	public function approvePendingApprovalJobById(
        \CircleCi\Models\Operations\ApprovePendingApprovalJobByIdRequest $request,
    ): \CircleCi\Models\Operations\ApprovePendingApprovalJobByIdResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/workflow/{id}/approve/{approval_request_id}', \CircleCi\Models\Operations\ApprovePendingApprovalJobByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\ApprovePendingApprovalJobByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 202) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messageResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\ApprovePendingApprovalJobByIdMessageResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->approvePendingApprovalJobByIdDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\ApprovePendingApprovalJobByIdDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Cancel a workflow
     * 
     * Cancels a running workflow.
     * 
     * @param \CircleCi\Models\Operations\CancelWorkflowRequest $request
     * @return \CircleCi\Models\Operations\CancelWorkflowResponse
     */
	public function cancelWorkflow(
        \CircleCi\Models\Operations\CancelWorkflowRequest $request,
    ): \CircleCi\Models\Operations\CancelWorkflowResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/workflow/{id}/cancel', \CircleCi\Models\Operations\CancelWorkflowRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\CancelWorkflowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 202) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messageResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\CancelWorkflowMessageResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->cancelWorkflowDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\CancelWorkflowDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a workflow
     * 
     * Returns summary fields of a workflow by ID.
     * 
     * @param \CircleCi\Models\Operations\GetWorkflowByIdRequest $request
     * @return \CircleCi\Models\Operations\GetWorkflowByIdResponse
     */
	public function getWorkflowById(
        \CircleCi\Models\Operations\GetWorkflowByIdRequest $request,
    ): \CircleCi\Models\Operations\GetWorkflowByIdResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/workflow/{id}', \CircleCi\Models\Operations\GetWorkflowByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetWorkflowByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->workflow = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetWorkflowByIdWorkflow', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowByIdDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetWorkflowByIdDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a workflow's jobs
     * 
     * Returns a sequence of jobs for a workflow.
     * 
     * @param \CircleCi\Models\Operations\ListWorkflowJobsRequest $request
     * @return \CircleCi\Models\Operations\ListWorkflowJobsResponse
     */
	public function listWorkflowJobs(
        \CircleCi\Models\Operations\ListWorkflowJobsRequest $request,
    ): \CircleCi\Models\Operations\ListWorkflowJobsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/workflow/{id}/job', \CircleCi\Models\Operations\ListWorkflowJobsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\ListWorkflowJobsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->workflowJobListResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\ListWorkflowJobsWorkflowJobListResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listWorkflowJobsDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\ListWorkflowJobsDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Rerun a workflow
     * 
     * Reruns a workflow.
     * 
     * @param \CircleCi\Models\Operations\RerunWorkflowRequest $request
     * @return \CircleCi\Models\Operations\RerunWorkflowResponse
     */
	public function rerunWorkflow(
        \CircleCi\Models\Operations\RerunWorkflowRequest $request,
    ): \CircleCi\Models\Operations\RerunWorkflowResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/workflow/{id}/rerun', \CircleCi\Models\Operations\RerunWorkflowRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\RerunWorkflowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 202) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rerunWorkflow202ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\RerunWorkflow202ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rerunWorkflowDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\RerunWorkflowDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
}