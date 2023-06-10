# insights

### Available Operations

* [getAllInsightsBranches](#getallinsightsbranches) - Get all branches for a project
* [getFlakyTests](#getflakytests) - Get flaky tests for a project
* [getJobTimeseries](#getjobtimeseries) - Job timeseries data
* [getOrgSummaryData](#getorgsummarydata) - Get summary metrics with trends for the entire org, and for each project.
* [getProjectWorkflowJobMetrics](#getprojectworkflowjobmetrics) - Get summary metrics for a project workflow's jobs.
* [getProjectWorkflowMetrics](#getprojectworkflowmetrics) - Get summary metrics for a project's workflows
* [getProjectWorkflowRuns](#getprojectworkflowruns) - Get recent runs of a workflow
* [getProjectWorkflowTestMetrics](#getprojectworkflowtestmetrics) - Get test metrics for a project's workflows
* [getProjectWorkflowsPageData](#getprojectworkflowspagedata) - Get summary metrics and trends for a project across it's workflows and branches
* [getWorkflowSummary](#getworkflowsummary) - Get metrics and trends for workflows

## getAllInsightsBranches

Get a list of all branches for a specified project. The list will only contain branches currently available within Insights. The maximum number of branches returned by this endpoint is 5,000.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetAllInsightsBranchesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetAllInsightsBranchesRequest();
    $request->projectSlug = 'accusamus';
    $request->workflowName = 'non';

    $response = $sdk->insights->getAllInsightsBranches($request);

    if ($response->getAllInsightsBranches200ApplicationJSONAny !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\CircleCi\Models\Operations\GetAllInsightsBranchesRequest](../../models/operations/GetAllInsightsBranchesRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\CircleCi\Models\Operations\GetAllInsightsBranchesResponse](../../models/operations/GetAllInsightsBranchesResponse.md)**


## getFlakyTests

Get a list of flaky tests for a given project. Flaky tests are branch agnostic. 
             A flaky test is a test that passed and failed in the same commit.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetFlakyTestsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetFlakyTestsRequest();
    $request->projectSlug = 'occaecati';

    $response = $sdk->insights->getFlakyTests($request);

    if ($response->getFlakyTests200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\CircleCi\Models\Operations\GetFlakyTestsRequest](../../models/operations/GetFlakyTestsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\CircleCi\Models\Operations\GetFlakyTestsResponse](../../models/operations/GetFlakyTestsResponse.md)**


## getJobTimeseries

Get timeseries data for all jobs within a workflow.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetJobTimeseriesRequest;
use \CircleCi\Models\Operations\GetJobTimeseriesGranularity;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetJobTimeseriesRequest();
    $request->branch = 'enim';
    $request->endDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-02-08T20:51:42.354Z');
    $request->granularity = GetJobTimeseriesGranularity::Hourly;
    $request->projectSlug = 'provident';
    $request->startDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-09-06T10:36:33.442Z');
    $request->workflowName = 'blanditiis';

    $response = $sdk->insights->getJobTimeseries($request);

    if ($response->getJobTimeseries200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\CircleCi\Models\Operations\GetJobTimeseriesRequest](../../models/operations/GetJobTimeseriesRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\CircleCi\Models\Operations\GetJobTimeseriesResponse](../../models/operations/GetJobTimeseriesResponse.md)**


## getOrgSummaryData

Gets aggregated summary metrics with trends for the entire org. 
              Also gets aggregated metrics and trends for each project belonging to the org.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetOrgSummaryDataRequest;
use \CircleCi\Models\Operations\GetOrgSummaryDataProjectNames;
use \CircleCi\Models\Operations\GetOrgSummaryDataReportingWindow;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetOrgSummaryDataRequest();
    $request->orgSlug = 'deleniti';
    $request->projectNames = new GetOrgSummaryDataProjectNames();
    $request->reportingWindow = GetOrgSummaryDataReportingWindow::Last60Days;

    $response = $sdk->insights->getOrgSummaryData($request);

    if ($response->getOrgSummaryData200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\CircleCi\Models\Operations\GetOrgSummaryDataRequest](../../models/operations/GetOrgSummaryDataRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\CircleCi\Models\Operations\GetOrgSummaryDataResponse](../../models/operations/GetOrgSummaryDataResponse.md)**


## getProjectWorkflowJobMetrics

Get summary metrics for a project workflow's jobs. Job runs going back at most 90 days are included in the aggregation window. Metrics are refreshed daily, and thus may not include executions from the last 24 hours. Please note that Insights is not a financial reporting tool and should not be used for precise credit reporting.  Credit reporting from Insights does not use the same source of truth as the billing information that is found in the Plan Overview page in the CircleCI UI, nor does the underlying data have the same data accuracy guarantees as the billing information in the CircleCI UI.  This may lead to discrepancies between credits reported from Insights and the billing information in the Plan Overview page of the CircleCI UI.  For precise credit reporting, always use the Plan Overview page in the CircleCI UI.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetProjectWorkflowJobMetricsRequest;
use \CircleCi\Models\Operations\GetProjectWorkflowJobMetricsReportingWindow;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetProjectWorkflowJobMetricsRequest();
    $request->allBranches = false;
    $request->branch = 'amet';
    $request->pageToken = 'deserunt';
    $request->projectSlug = 'nisi';
    $request->reportingWindow = GetProjectWorkflowJobMetricsReportingWindow::Last24Hours;
    $request->workflowName = 'natus';

    $response = $sdk->insights->getProjectWorkflowJobMetrics($request);

    if ($response->getProjectWorkflowJobMetrics200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\CircleCi\Models\Operations\GetProjectWorkflowJobMetricsRequest](../../models/operations/GetProjectWorkflowJobMetricsRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\CircleCi\Models\Operations\GetProjectWorkflowJobMetricsResponse](../../models/operations/GetProjectWorkflowJobMetricsResponse.md)**


## getProjectWorkflowMetrics

Get summary metrics for a project's workflows.  Workflow runs going back at most 90 days are included in the aggregation window. Metrics are refreshed daily, and thus may not include executions from the last 24 hours.  Please note that Insights is not a financial reporting tool and should not be used for precise credit reporting.  Credit reporting from Insights does not use the same source of truth as the billing information that is found in the Plan Overview page in the CircleCI UI, nor does the underlying data have the same data accuracy guarantees as the billing information in the CircleCI UI.  This may lead to discrepancies between credits reported from Insights and the billing information in the Plan Overview page of the CircleCI UI.  For precise credit reporting, always use the Plan Overview page in the CircleCI UI.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetProjectWorkflowMetricsRequest;
use \CircleCi\Models\Operations\GetProjectWorkflowMetricsReportingWindow;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetProjectWorkflowMetricsRequest();
    $request->allBranches = false;
    $request->branch = 'omnis';
    $request->pageToken = 'molestiae';
    $request->projectSlug = 'perferendis';
    $request->reportingWindow = GetProjectWorkflowMetricsReportingWindow::Last24Hours;

    $response = $sdk->insights->getProjectWorkflowMetrics($request);

    if ($response->getProjectWorkflowMetrics200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\CircleCi\Models\Operations\GetProjectWorkflowMetricsRequest](../../models/operations/GetProjectWorkflowMetricsRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\CircleCi\Models\Operations\GetProjectWorkflowMetricsResponse](../../models/operations/GetProjectWorkflowMetricsResponse.md)**


## getProjectWorkflowRuns

Get recent runs of a workflow. Runs going back at most 90 days are returned. Please note that Insights is not a financial reporting tool and should not be used for precise credit reporting.  Credit reporting from Insights does not use the same source of truth as the billing information that is found in the Plan Overview page in the CircleCI UI, nor does the underlying data have the same data accuracy guarantees as the billing information in the CircleCI UI.  This may lead to discrepancies between credits reported from Insights and the billing information in the Plan Overview page of the CircleCI UI.  For precise credit reporting, always use the Plan Overview page in the CircleCI UI.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetProjectWorkflowRunsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetProjectWorkflowRunsRequest();
    $request->allBranches = false;
    $request->branch = 'magnam';
    $request->endDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-09-06T01:45:34.248Z');
    $request->pageToken = 'labore';
    $request->projectSlug = 'labore';
    $request->startDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-20T10:11:05.115Z');
    $request->workflowName = 'nobis';

    $response = $sdk->insights->getProjectWorkflowRuns($request);

    if ($response->getProjectWorkflowRuns200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\CircleCi\Models\Operations\GetProjectWorkflowRunsRequest](../../models/operations/GetProjectWorkflowRunsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\CircleCi\Models\Operations\GetProjectWorkflowRunsResponse](../../models/operations/GetProjectWorkflowRunsResponse.md)**


## getProjectWorkflowTestMetrics

Get test metrics for a project's workflows. Currently tests metrics are calculated based on 10 most recent workflow runs.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetProjectWorkflowTestMetricsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetProjectWorkflowTestMetricsRequest();
    $request->allBranches = false;
    $request->branch = 'eum';
    $request->projectSlug = 'vero';
    $request->workflowName = 'aspernatur';

    $response = $sdk->insights->getProjectWorkflowTestMetrics($request);

    if ($response->getProjectWorkflowTestMetrics200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\CircleCi\Models\Operations\GetProjectWorkflowTestMetricsRequest](../../models/operations/GetProjectWorkflowTestMetricsRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\CircleCi\Models\Operations\GetProjectWorkflowTestMetricsResponse](../../models/operations/GetProjectWorkflowTestMetricsResponse.md)**


## getProjectWorkflowsPageData

Get summary metrics and trends for a project at workflow and branch level. 
             Workflow runs going back at most 90 days are included in the aggregation window. 
             Trends are only supported upto last 30 days. 
             Please note that Insights is not a financial reporting tool and should not be used for precise credit reporting.  Credit reporting from Insights does not use the same source of truth as the billing information that is found in the Plan Overview page in the CircleCI UI, nor does the underlying data have the same data accuracy guarantees as the billing information in the CircleCI UI.  This may lead to discrepancies between credits reported from Insights and the billing information in the Plan Overview page of the CircleCI UI.  For precise credit reporting, always use the Plan Overview page in the CircleCI UI.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetProjectWorkflowsPageDataRequest;
use \CircleCi\Models\Operations\GetProjectWorkflowsPageDataBranches;
use \CircleCi\Models\Operations\GetProjectWorkflowsPageDataReportingWindow;
use \CircleCi\Models\Operations\GetProjectWorkflowsPageDataWorkflowNames;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetProjectWorkflowsPageDataRequest();
    $request->branches = new GetProjectWorkflowsPageDataBranches();
    $request->projectSlug = 'architecto';
    $request->reportingWindow = GetProjectWorkflowsPageDataReportingWindow::Last90Days;
    $request->workflowNames = new GetProjectWorkflowsPageDataWorkflowNames();

    $response = $sdk->insights->getProjectWorkflowsPageData($request);

    if ($response->getProjectWorkflowsPageData200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\CircleCi\Models\Operations\GetProjectWorkflowsPageDataRequest](../../models/operations/GetProjectWorkflowsPageDataRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\CircleCi\Models\Operations\GetProjectWorkflowsPageDataResponse](../../models/operations/GetProjectWorkflowsPageDataResponse.md)**


## getWorkflowSummary

Get the metrics and trends for a particular workflow on a single branch or all branches

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetWorkflowSummaryRequest;
use \CircleCi\Models\Operations\GetWorkflowSummaryBranches;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetWorkflowSummaryRequest();
    $request->allBranches = false;
    $request->branches = new GetWorkflowSummaryBranches();
    $request->projectSlug = 'et';
    $request->workflowName = 'excepturi';

    $response = $sdk->insights->getWorkflowSummary($request);

    if ($response->getWorkflowSummary200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\CircleCi\Models\Operations\GetWorkflowSummaryRequest](../../models/operations/GetWorkflowSummaryRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\CircleCi\Models\Operations\GetWorkflowSummaryResponse](../../models/operations/GetWorkflowSummaryResponse.md)**

