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
    $request->approvalRequestId = 'a19f1d17-0513-439d-8808-6a1840394c26';
    $request->id = '071f93f5-f064-42da-87af-515cc413aa63';

    $response = $sdk->workflow->approvePendingApprovalJobById($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->id = 'aae8d678-64db-4b67-9fd5-e60b375ed4f6';

    $response = $sdk->workflow->cancelWorkflow($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->id = 'fbee41f3-3317-4fe3-9b60-eb1ea426555b';

    $response = $sdk->workflow->getWorkflowById($request);

    if ($response->workflow !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->id = 'a3c28744-ed53-4b88-b3a8-d8f5c0b2f2fb';

    $response = $sdk->workflow->listWorkflowJobs($request);

    if ($response->workflowJobListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
        'b194a276-b269-416f-a1f0-8f4294e3698f',
        '447f603e-8b44-45e8-8ca5-5efd20e457e1',
    ];
    $request->requestBody->sparseTree = false;
    $request->id = '858b6a89-fbe3-4a5a-a8e4-824d0ab40750';

    $response = $sdk->workflow->rerunWorkflow($request);

    if ($response->rerunWorkflow202ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
