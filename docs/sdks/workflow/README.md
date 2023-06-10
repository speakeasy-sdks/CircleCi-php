# workflow

### Available Operations

* [approvePendingApprovalJobById](#approvependingapprovaljobbyid) - Approve a job
* [cancelWorkflow](#cancelworkflow) - Cancel a workflow
* [getWorkflowById](#getworkflowbyid) - Get a workflow
* [listWorkflowJobs](#listworkflowjobs) - Get a workflow's jobs
* [rerunWorkflow](#rerunworkflow) - Rerun a workflow

## approvePendingApprovalJobById

Approves a pending approval job in a workflow.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ApprovePendingApprovalJobByIdRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ApprovePendingApprovalJobByIdRequest();
    $request->approvalRequestId = '21aa6f1e-674b-4db0-8f15-756082d68ea1';
    $request->id = '9f1d1705-1339-4d08-886a-1840394c2607';

    $response = $sdk->workflow->approvePendingApprovalJobById($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\CircleCi\Models\Operations\ApprovePendingApprovalJobByIdRequest](../../models/operations/ApprovePendingApprovalJobByIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\CircleCi\Models\Operations\ApprovePendingApprovalJobByIdResponse](../../models/operations/ApprovePendingApprovalJobByIdResponse.md)**


## cancelWorkflow

Cancels a running workflow.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\CancelWorkflowRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CancelWorkflowRequest();
    $request->id = '1f93f5f0-642d-4ac7-af51-5cc413aa63aa';

    $response = $sdk->workflow->cancelWorkflow($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\CircleCi\Models\Operations\CancelWorkflowRequest](../../models/operations/CancelWorkflowRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\CircleCi\Models\Operations\CancelWorkflowResponse](../../models/operations/CancelWorkflowResponse.md)**


## getWorkflowById

Returns summary fields of a workflow by ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetWorkflowByIdRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetWorkflowByIdRequest();
    $request->id = 'e8d67864-dbb6-475f-95e6-0b375ed4f6fb';

    $response = $sdk->workflow->getWorkflowById($request);

    if ($response->workflow !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\CircleCi\Models\Operations\GetWorkflowByIdRequest](../../models/operations/GetWorkflowByIdRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\CircleCi\Models\Operations\GetWorkflowByIdResponse](../../models/operations/GetWorkflowByIdResponse.md)**


## listWorkflowJobs

Returns a sequence of jobs for a workflow.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ListWorkflowJobsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListWorkflowJobsRequest();
    $request->id = 'ee41f333-17fe-435b-a0eb-1ea426555ba3';

    $response = $sdk->workflow->listWorkflowJobs($request);

    if ($response->workflowJobListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\CircleCi\Models\Operations\ListWorkflowJobsRequest](../../models/operations/ListWorkflowJobsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\CircleCi\Models\Operations\ListWorkflowJobsResponse](../../models/operations/ListWorkflowJobsResponse.md)**


## rerunWorkflow

Reruns a workflow.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\RerunWorkflowRequest;
use \CircleCi\Models\Operations\RerunWorkflowRerunWorkflowParameters;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RerunWorkflowRequest();
    $request->requestBody = new RerunWorkflowRerunWorkflowParameters();
    $request->requestBody->enableSsh = false;
    $request->requestBody->fromFailed = false;
    $request->requestBody->jobs = [
        '28744ed5-3b88-4f3a-8d8f-5c0b2f2fb7b1',
        '94a276b2-6916-4fe1-b08f-4294e3698f44',
        '7f603e8b-445e-480c-a55e-fd20e457e185',
        '8b6a89fb-e3a5-4aa8-a482-4d0ab4075088',
    ];
    $request->requestBody->sparseTree = false;
    $request->id = 'e5186206-5e90-44f3-b119-4b8abf603a79';

    $response = $sdk->workflow->rerunWorkflow($request);

    if ($response->rerunWorkflow202ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\CircleCi\Models\Operations\RerunWorkflowRequest](../../models/operations/RerunWorkflowRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\CircleCi\Models\Operations\RerunWorkflowResponse](../../models/operations/RerunWorkflowResponse.md)**

