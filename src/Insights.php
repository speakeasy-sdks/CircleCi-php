<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi;

class Insights 
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
     * Get all branches for a project
     * 
     * Get a list of all branches for a specified project. The list will only contain branches currently available within Insights. The maximum number of branches returned by this endpoint is 5,000.
     * 
     * @param \CircleCi\Models\Operations\GetAllInsightsBranchesRequest $request
     * @return \CircleCi\Models\Operations\GetAllInsightsBranchesResponse
     */
	public function getAllInsightsBranches(
        \CircleCi\Models\Operations\GetAllInsightsBranchesRequest $request,
    ): \CircleCi\Models\Operations\GetAllInsightsBranchesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/insights/{project-slug}/branches', \CircleCi\Models\Operations\GetAllInsightsBranchesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\CircleCi\Models\Operations\GetAllInsightsBranchesRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetAllInsightsBranchesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getAllInsightsBranches200ApplicationJSONAny = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getAllInsightsBranchesDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetAllInsightsBranchesDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get flaky tests for a project
     * 
     * Get a list of flaky tests for a given project. Flaky tests are branch agnostic. 
     *              A flaky test is a test that passed and failed in the same commit.
     * 
     * @param \CircleCi\Models\Operations\GetFlakyTestsRequest $request
     * @return \CircleCi\Models\Operations\GetFlakyTestsResponse
     */
	public function getFlakyTests(
        \CircleCi\Models\Operations\GetFlakyTestsRequest $request,
    ): \CircleCi\Models\Operations\GetFlakyTestsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/insights/{project-slug}/flaky-tests', \CircleCi\Models\Operations\GetFlakyTestsRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetFlakyTestsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getFlakyTests200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetFlakyTests200ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getFlakyTestsDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetFlakyTestsDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Job timeseries data
     * 
     * Get timeseries data for all jobs within a workflow.
     * 
     * @param \CircleCi\Models\Operations\GetJobTimeseriesRequest $request
     * @return \CircleCi\Models\Operations\GetJobTimeseriesResponse
     */
	public function getJobTimeseries(
        \CircleCi\Models\Operations\GetJobTimeseriesRequest $request,
    ): \CircleCi\Models\Operations\GetJobTimeseriesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/insights/time-series/{project-slug}/workflows/{workflow-name}/jobs', \CircleCi\Models\Operations\GetJobTimeseriesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\CircleCi\Models\Operations\GetJobTimeseriesRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetJobTimeseriesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getJobTimeseries200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetJobTimeseries200ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getJobTimeseriesDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetJobTimeseriesDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get summary metrics with trends for the entire org, and for each project.
     * 
     * Gets aggregated summary metrics with trends for the entire org. 
     *               Also gets aggregated metrics and trends for each project belonging to the org.
     * 
     * @param \CircleCi\Models\Operations\GetOrgSummaryDataRequest $request
     * @return \CircleCi\Models\Operations\GetOrgSummaryDataResponse
     */
	public function getOrgSummaryData(
        \CircleCi\Models\Operations\GetOrgSummaryDataRequest $request,
    ): \CircleCi\Models\Operations\GetOrgSummaryDataResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/insights/{org-slug}/summary', \CircleCi\Models\Operations\GetOrgSummaryDataRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\CircleCi\Models\Operations\GetOrgSummaryDataRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetOrgSummaryDataResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getOrgSummaryData200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetOrgSummaryData200ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getOrgSummaryDataDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetOrgSummaryDataDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get summary metrics for a project workflow's jobs.
     * 
     * Get summary metrics for a project workflow's jobs. Job runs going back at most 90 days are included in the aggregation window. Metrics are refreshed daily, and thus may not include executions from the last 24 hours. Please note that Insights is not a financial reporting tool and should not be used for precise credit reporting.  Credit reporting from Insights does not use the same source of truth as the billing information that is found in the Plan Overview page in the CircleCI UI, nor does the underlying data have the same data accuracy guarantees as the billing information in the CircleCI UI.  This may lead to discrepancies between credits reported from Insights and the billing information in the Plan Overview page of the CircleCI UI.  For precise credit reporting, always use the Plan Overview page in the CircleCI UI.
     * 
     * @param \CircleCi\Models\Operations\GetProjectWorkflowJobMetricsRequest $request
     * @return \CircleCi\Models\Operations\GetProjectWorkflowJobMetricsResponse
     */
	public function getProjectWorkflowJobMetrics(
        \CircleCi\Models\Operations\GetProjectWorkflowJobMetricsRequest $request,
    ): \CircleCi\Models\Operations\GetProjectWorkflowJobMetricsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/insights/{project-slug}/workflows/{workflow-name}/jobs', \CircleCi\Models\Operations\GetProjectWorkflowJobMetricsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\CircleCi\Models\Operations\GetProjectWorkflowJobMetricsRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetProjectWorkflowJobMetricsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectWorkflowJobMetrics200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectWorkflowJobMetrics200ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectWorkflowJobMetricsDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectWorkflowJobMetricsDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get summary metrics for a project's workflows
     * 
     * Get summary metrics for a project's workflows.  Workflow runs going back at most 90 days are included in the aggregation window. Metrics are refreshed daily, and thus may not include executions from the last 24 hours.  Please note that Insights is not a financial reporting tool and should not be used for precise credit reporting.  Credit reporting from Insights does not use the same source of truth as the billing information that is found in the Plan Overview page in the CircleCI UI, nor does the underlying data have the same data accuracy guarantees as the billing information in the CircleCI UI.  This may lead to discrepancies between credits reported from Insights and the billing information in the Plan Overview page of the CircleCI UI.  For precise credit reporting, always use the Plan Overview page in the CircleCI UI.
     * 
     * @param \CircleCi\Models\Operations\GetProjectWorkflowMetricsRequest $request
     * @return \CircleCi\Models\Operations\GetProjectWorkflowMetricsResponse
     */
	public function getProjectWorkflowMetrics(
        \CircleCi\Models\Operations\GetProjectWorkflowMetricsRequest $request,
    ): \CircleCi\Models\Operations\GetProjectWorkflowMetricsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/insights/{project-slug}/workflows', \CircleCi\Models\Operations\GetProjectWorkflowMetricsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\CircleCi\Models\Operations\GetProjectWorkflowMetricsRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetProjectWorkflowMetricsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectWorkflowMetrics200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectWorkflowMetrics200ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectWorkflowMetricsDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectWorkflowMetricsDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get recent runs of a workflow
     * 
     * Get recent runs of a workflow. Runs going back at most 90 days are returned. Please note that Insights is not a financial reporting tool and should not be used for precise credit reporting.  Credit reporting from Insights does not use the same source of truth as the billing information that is found in the Plan Overview page in the CircleCI UI, nor does the underlying data have the same data accuracy guarantees as the billing information in the CircleCI UI.  This may lead to discrepancies between credits reported from Insights and the billing information in the Plan Overview page of the CircleCI UI.  For precise credit reporting, always use the Plan Overview page in the CircleCI UI.
     * 
     * @param \CircleCi\Models\Operations\GetProjectWorkflowRunsRequest $request
     * @return \CircleCi\Models\Operations\GetProjectWorkflowRunsResponse
     */
	public function getProjectWorkflowRuns(
        \CircleCi\Models\Operations\GetProjectWorkflowRunsRequest $request,
    ): \CircleCi\Models\Operations\GetProjectWorkflowRunsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/insights/{project-slug}/workflows/{workflow-name}', \CircleCi\Models\Operations\GetProjectWorkflowRunsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\CircleCi\Models\Operations\GetProjectWorkflowRunsRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetProjectWorkflowRunsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectWorkflowRuns200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectWorkflowRuns200ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectWorkflowRunsDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectWorkflowRunsDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get test metrics for a project's workflows
     * 
     * Get test metrics for a project's workflows. Currently tests metrics are calculated based on 10 most recent workflow runs.
     * 
     * @param \CircleCi\Models\Operations\GetProjectWorkflowTestMetricsRequest $request
     * @return \CircleCi\Models\Operations\GetProjectWorkflowTestMetricsResponse
     */
	public function getProjectWorkflowTestMetrics(
        \CircleCi\Models\Operations\GetProjectWorkflowTestMetricsRequest $request,
    ): \CircleCi\Models\Operations\GetProjectWorkflowTestMetricsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/insights/{project-slug}/workflows/{workflow-name}/test-metrics', \CircleCi\Models\Operations\GetProjectWorkflowTestMetricsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\CircleCi\Models\Operations\GetProjectWorkflowTestMetricsRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetProjectWorkflowTestMetricsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectWorkflowTestMetrics200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectWorkflowTestMetrics200ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectWorkflowTestMetricsDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectWorkflowTestMetricsDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get summary metrics and trends for a project across it's workflows and branches
     * 
     * Get summary metrics and trends for a project at workflow and branch level. 
     *              Workflow runs going back at most 90 days are included in the aggregation window. 
     *              Trends are only supported upto last 30 days. 
     *              Please note that Insights is not a financial reporting tool and should not be used for precise credit reporting.  Credit reporting from Insights does not use the same source of truth as the billing information that is found in the Plan Overview page in the CircleCI UI, nor does the underlying data have the same data accuracy guarantees as the billing information in the CircleCI UI.  This may lead to discrepancies between credits reported from Insights and the billing information in the Plan Overview page of the CircleCI UI.  For precise credit reporting, always use the Plan Overview page in the CircleCI UI.
     * 
     * @param \CircleCi\Models\Operations\GetProjectWorkflowsPageDataRequest $request
     * @return \CircleCi\Models\Operations\GetProjectWorkflowsPageDataResponse
     */
	public function getProjectWorkflowsPageData(
        \CircleCi\Models\Operations\GetProjectWorkflowsPageDataRequest $request,
    ): \CircleCi\Models\Operations\GetProjectWorkflowsPageDataResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/insights/pages/{project-slug}/summary', \CircleCi\Models\Operations\GetProjectWorkflowsPageDataRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\CircleCi\Models\Operations\GetProjectWorkflowsPageDataRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetProjectWorkflowsPageDataResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectWorkflowsPageData200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectWorkflowsPageData200ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProjectWorkflowsPageDataDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetProjectWorkflowsPageDataDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get metrics and trends for workflows
     * 
     * Get the metrics and trends for a particular workflow on a single branch or all branches
     * 
     * @param \CircleCi\Models\Operations\GetWorkflowSummaryRequest $request
     * @return \CircleCi\Models\Operations\GetWorkflowSummaryResponse
     */
	public function getWorkflowSummary(
        \CircleCi\Models\Operations\GetWorkflowSummaryRequest $request,
    ): \CircleCi\Models\Operations\GetWorkflowSummaryResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/insights/{project-slug}/workflows/{workflow-name}/summary', \CircleCi\Models\Operations\GetWorkflowSummaryRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\CircleCi\Models\Operations\GetWorkflowSummaryRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \CircleCi\Models\Operations\GetWorkflowSummaryResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowSummary200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetWorkflowSummary200ApplicationJSON', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowSummaryDefaultApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'CircleCi\Models\Operations\GetWorkflowSummaryDefaultApplicationJSON', 'json');
            }
        }

        return $response;
    }
}