<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi;

class Schedule 
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
     * Create a schedule
     * 
     * Creates a schedule and returns the created schedule.
     * 
     * @param \CircleCi\Models\Operations\CreateScheduleRequest $request
     * @return \CircleCi\Models\Operations\CreateScheduleResponse
     */
	public function createSchedule(
        \CircleCi\Models\Operations\CreateScheduleRequest $request,
    ): \CircleCi\Models\Operations\CreateScheduleResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/schedule', \CircleCi\Models\Operations\CreateScheduleRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\CreateScheduleResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schedule = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\CreateScheduleSchedule', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createScheduleDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\CreateScheduleDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Delete a schedule
     * 
     * Deletes the schedule by id.
     * 
     * @param \CircleCi\Models\Operations\DeleteScheduleByIdRequest $request
     * @return \CircleCi\Models\Operations\DeleteScheduleByIdResponse
     */
	public function deleteScheduleById(
        \CircleCi\Models\Operations\DeleteScheduleByIdRequest $request,
    ): \CircleCi\Models\Operations\DeleteScheduleByIdResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/schedule/{schedule-id}', \CircleCi\Models\Operations\DeleteScheduleByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\DeleteScheduleByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messageResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\DeleteScheduleByIdMessageResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deleteScheduleByIdDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\DeleteScheduleByIdDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a schedule
     * 
     * Get a schedule by id.
     * 
     * @param \CircleCi\Models\Operations\GetScheduleByIdRequest $request
     * @return \CircleCi\Models\Operations\GetScheduleByIdResponse
     */
	public function getScheduleById(
        \CircleCi\Models\Operations\GetScheduleByIdRequest $request,
    ): \CircleCi\Models\Operations\GetScheduleByIdResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/schedule/{schedule-id}', \CircleCi\Models\Operations\GetScheduleByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetScheduleByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schedule = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetScheduleByIdSchedule', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getScheduleByIdDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetScheduleByIdDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get all schedules
     * 
     * Returns all schedules for this project.
     * 
     * @param \CircleCi\Models\Operations\ListSchedulesForProjectRequest $request
     * @return \CircleCi\Models\Operations\ListSchedulesForProjectResponse
     */
	public function listSchedulesForProject(
        \CircleCi\Models\Operations\ListSchedulesForProjectRequest $request,
    ): \CircleCi\Models\Operations\ListSchedulesForProjectResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/schedule', \CircleCi\Models\Operations\ListSchedulesForProjectRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\CircleCi\Models\Operations\ListSchedulesForProjectRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\ListSchedulesForProjectResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listSchedulesForProject200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\ListSchedulesForProject200ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listSchedulesForProjectDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\ListSchedulesForProjectDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a schedule
     * 
     * Updates a schedule and returns the updated schedule.
     * 
     * @param \CircleCi\Models\Operations\UpdateScheduleRequest $request
     * @return \CircleCi\Models\Operations\UpdateScheduleResponse
     */
	public function updateSchedule(
        \CircleCi\Models\Operations\UpdateScheduleRequest $request,
    ): \CircleCi\Models\Operations\UpdateScheduleResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/schedule/{schedule-id}', \CircleCi\Models\Operations\UpdateScheduleRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\UpdateScheduleResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schedule = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\UpdateScheduleSchedule', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateScheduleDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\UpdateScheduleDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
}