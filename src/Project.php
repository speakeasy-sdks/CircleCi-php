<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi;

class Project 
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
     * Create a new checkout key
     * 
     * Creates a new checkout key. This API request is only usable with a user API token.
     * 
     * @param \CircleCi\Models\Operations\CreateCheckoutKeyRequest $request
     * @return \CircleCi\Models\Operations\CreateCheckoutKeyResponse
     */
	public function createCheckoutKey(
        \CircleCi\Models\Operations\CreateCheckoutKeyRequest $request,
    ): \CircleCi\Models\Operations\CreateCheckoutKeyResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/checkout-key', \CircleCi\Models\Operations\CreateCheckoutKeyRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\CreateCheckoutKeyResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->checkoutKey = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\CreateCheckoutKeyCheckoutKey', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createCheckoutKeyDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\CreateCheckoutKeyDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create an environment variable
     * 
     * Creates a new environment variable.
     * 
     * @param \CircleCi\Models\Operations\CreateEnvVarRequest $request
     * @return \CircleCi\Models\Operations\CreateEnvVarResponse
     */
	public function createEnvVar(
        \CircleCi\Models\Operations\CreateEnvVarRequest $request,
    ): \CircleCi\Models\Operations\CreateEnvVarResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/envvar', \CircleCi\Models\Operations\CreateEnvVarRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\CreateEnvVarResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->environmentVariablePair = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\CreateEnvVarEnvironmentVariablePair', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createEnvVarDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\CreateEnvVarDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Delete a checkout key
     * 
     * Deletes the checkout key.
     * 
     * @param \CircleCi\Models\Operations\DeleteCheckoutKeyRequest $request
     * @return \CircleCi\Models\Operations\DeleteCheckoutKeyResponse
     */
	public function deleteCheckoutKey(
        \CircleCi\Models\Operations\DeleteCheckoutKeyRequest $request,
    ): \CircleCi\Models\Operations\DeleteCheckoutKeyResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/checkout-key/{fingerprint}', \CircleCi\Models\Operations\DeleteCheckoutKeyRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\DeleteCheckoutKeyResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messageResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\DeleteCheckoutKeyMessageResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deleteCheckoutKeyDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\DeleteCheckoutKeyDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Delete an environment variable
     * 
     * Deletes the environment variable named :name.
     * 
     * @param \CircleCi\Models\Operations\DeleteEnvVarRequest $request
     * @return \CircleCi\Models\Operations\DeleteEnvVarResponse
     */
	public function deleteEnvVar(
        \CircleCi\Models\Operations\DeleteEnvVarRequest $request,
    ): \CircleCi\Models\Operations\DeleteEnvVarResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/envvar/{name}', \CircleCi\Models\Operations\DeleteEnvVarRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\DeleteEnvVarResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messageResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\DeleteEnvVarMessageResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deleteEnvVarDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\DeleteEnvVarDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a checkout key
     * 
     * Returns an individual checkout key.
     * 
     * @param \CircleCi\Models\Operations\GetCheckoutKeyRequest $request
     * @return \CircleCi\Models\Operations\GetCheckoutKeyResponse
     */
	public function getCheckoutKey(
        \CircleCi\Models\Operations\GetCheckoutKeyRequest $request,
    ): \CircleCi\Models\Operations\GetCheckoutKeyResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/checkout-key/{fingerprint}', \CircleCi\Models\Operations\GetCheckoutKeyRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetCheckoutKeyResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->checkoutKey = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetCheckoutKeyCheckoutKey', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getCheckoutKeyDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetCheckoutKeyDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a masked environment variable
     * 
     * Returns the masked value of environment variable :name.
     * 
     * @param \CircleCi\Models\Operations\GetEnvVarRequest $request
     * @return \CircleCi\Models\Operations\GetEnvVarResponse
     */
	public function getEnvVar(
        \CircleCi\Models\Operations\GetEnvVarRequest $request,
    ): \CircleCi\Models\Operations\GetEnvVarResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/envvar/{name}', \CircleCi\Models\Operations\GetEnvVarRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetEnvVarResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->environmentVariablePair = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetEnvVarEnvironmentVariablePair', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getEnvVarDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetEnvVarDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a project
     * 
     * Retrieves a project by project slug.
     * 
     * @param \CircleCi\Models\Operations\GetProjectBySlugRequest $request
     * @return \CircleCi\Models\Operations\GetProjectBySlugResponse
     */
	public function getProjectBySlug(
        \CircleCi\Models\Operations\GetProjectBySlugRequest $request,
    ): \CircleCi\Models\Operations\GetProjectBySlugResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}', \CircleCi\Models\Operations\GetProjectBySlugRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetProjectBySlugResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->project = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectBySlugProject', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectBySlugDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectBySlugDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get all checkout keys
     * 
     * Returns a sequence of checkout keys for `:project`.
     * 
     * @param \CircleCi\Models\Operations\ListCheckoutKeysRequest $request
     * @return \CircleCi\Models\Operations\ListCheckoutKeysResponse
     */
	public function listCheckoutKeys(
        \CircleCi\Models\Operations\ListCheckoutKeysRequest $request,
    ): \CircleCi\Models\Operations\ListCheckoutKeysResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/checkout-key', \CircleCi\Models\Operations\ListCheckoutKeysRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\ListCheckoutKeysResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->checkoutKeyListResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\ListCheckoutKeysCheckoutKeyListResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCheckoutKeysDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\ListCheckoutKeysDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all environment variables
     * 
     * Returns four 'x' characters, in addition to the last four ASCII characters of the value, consistent with the display of environment variable values on the CircleCI website.
     * 
     * @param \CircleCi\Models\Operations\ListEnvVarsRequest $request
     * @return \CircleCi\Models\Operations\ListEnvVarsResponse
     */
	public function listEnvVars(
        \CircleCi\Models\Operations\ListEnvVarsRequest $request,
    ): \CircleCi\Models\Operations\ListEnvVarsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/project/{project-slug}/envvar', \CircleCi\Models\Operations\ListEnvVarsRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\ListEnvVarsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->environmentVariableListResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\ListEnvVarsEnvironmentVariableListResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listEnvVarsDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\ListEnvVarsDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
}