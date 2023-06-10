# pipeline

### Available Operations

* [continuePipeline](#continuepipeline) - Continue a pipeline
* [getPipelineById](#getpipelinebyid) - Get a pipeline by ID
* [getPipelineByNumber](#getpipelinebynumber) - Get a pipeline by pipeline number
* [getPipelineConfigById](#getpipelineconfigbyid) - Get a pipeline's configuration
* [listMyPipelines](#listmypipelines) - Get your pipelines
* [listPipelines](#listpipelines) - Get a list of pipelines
* [listPipelinesForProject](#listpipelinesforproject) - Get all pipelines
* [listWorkflowsByPipelineId](#listworkflowsbypipelineid) - Get a pipeline's workflows
* [triggerPipeline](#triggerpipeline) - Trigger a new pipeline

## continuePipeline

Continue a pipeline from the setup phase.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ContinuePipelineRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ContinuePipelineRequestBody();
    $request->configuration = 'ad';
    $request->continuationKey = 'eum';
    $request->parameters = [
        'necessitatibus' => 'odit',
    ];

    $response = $sdk->pipeline->continuePipeline($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\CircleCi\Models\Operations\ContinuePipelineRequestBody](../../models/operations/ContinuePipelineRequestBody.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\CircleCi\Models\Operations\ContinuePipelineResponse](../../models/operations/ContinuePipelineResponse.md)**


## getPipelineById

Returns a pipeline by the pipeline ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetPipelineByIdRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetPipelineByIdRequest();
    $request->pipelineId = '516fe4c8-b711-4e5b-bfd2-ed028921cddc';

    $response = $sdk->pipeline->getPipelineById($request);

    if ($response->pipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\CircleCi\Models\Operations\GetPipelineByIdRequest](../../models/operations/GetPipelineByIdRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\CircleCi\Models\Operations\GetPipelineByIdResponse](../../models/operations/GetPipelineByIdResponse.md)**


## getPipelineByNumber

Returns a pipeline by the pipeline number.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetPipelineByNumberRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetPipelineByNumberRequest();
    $request->pipelineNumber = 'ea';
    $request->projectSlug = 'excepturi';

    $response = $sdk->pipeline->getPipelineByNumber($request);

    if ($response->pipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\CircleCi\Models\Operations\GetPipelineByNumberRequest](../../models/operations/GetPipelineByNumberRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\CircleCi\Models\Operations\GetPipelineByNumberResponse](../../models/operations/GetPipelineByNumberResponse.md)**


## getPipelineConfigById

Returns a pipeline's configuration by ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetPipelineConfigByIdRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetPipelineConfigByIdRequest();
    $request->pipelineId = '2601fb57-6b0d-45f0-930c-5fbb25870532';

    $response = $sdk->pipeline->getPipelineConfigById($request);

    if ($response->pipelineConfig !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\CircleCi\Models\Operations\GetPipelineConfigByIdRequest](../../models/operations/GetPipelineConfigByIdRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\CircleCi\Models\Operations\GetPipelineConfigByIdResponse](../../models/operations/GetPipelineConfigByIdResponse.md)**


## listMyPipelines

Returns a sequence of all pipelines for this project triggered by the user.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ListMyPipelinesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListMyPipelinesRequest();
    $request->pageToken = 'perferendis';
    $request->projectSlug = 'dolores';

    $response = $sdk->pipeline->listMyPipelines($request);

    if ($response->pipelineListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\CircleCi\Models\Operations\ListMyPipelinesRequest](../../models/operations/ListMyPipelinesRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\CircleCi\Models\Operations\ListMyPipelinesResponse](../../models/operations/ListMyPipelinesResponse.md)**


## listPipelines

Returns all pipelines for the most recently built projects (max 250) you follow in an organization.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ListPipelinesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListPipelinesRequest();
    $request->mine = false;
    $request->orgSlug = 'minus';
    $request->pageToken = 'quam';

    $response = $sdk->pipeline->listPipelines($request);

    if ($response->pipelineListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\CircleCi\Models\Operations\ListPipelinesRequest](../../models/operations/ListPipelinesRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\CircleCi\Models\Operations\ListPipelinesResponse](../../models/operations/ListPipelinesResponse.md)**


## listPipelinesForProject

Returns all pipelines for this project.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ListPipelinesForProjectRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListPipelinesForProjectRequest();
    $request->branch = 'dolor';
    $request->pageToken = 'vero';
    $request->projectSlug = 'nostrum';

    $response = $sdk->pipeline->listPipelinesForProject($request);

    if ($response->pipelineListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\CircleCi\Models\Operations\ListPipelinesForProjectRequest](../../models/operations/ListPipelinesForProjectRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\CircleCi\Models\Operations\ListPipelinesForProjectResponse](../../models/operations/ListPipelinesForProjectResponse.md)**


## listWorkflowsByPipelineId

Returns a paginated list of workflows by pipeline ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ListWorkflowsByPipelineIdRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListWorkflowsByPipelineIdRequest();
    $request->pageToken = 'hic';
    $request->pipelineId = 'e9b90c28-909b-43fe-89a8-d9cbf4863332';

    $response = $sdk->pipeline->listWorkflowsByPipelineId($request);

    if ($response->workflowListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\CircleCi\Models\Operations\ListWorkflowsByPipelineIdRequest](../../models/operations/ListWorkflowsByPipelineIdRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\CircleCi\Models\Operations\ListWorkflowsByPipelineIdResponse](../../models/operations/ListWorkflowsByPipelineIdResponse.md)**


## triggerPipeline

Triggers a new pipeline on the project.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\TriggerPipelineRequest;
use \CircleCi\Models\Operations\TriggerPipelineTriggerPipelineParameters;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TriggerPipelineRequest();
    $request->requestBody = new TriggerPipelineTriggerPipelineParameters();
    $request->requestBody->branch = 'feature/design-new-api';
    $request->requestBody->parameters = [
        'hic' => 'excepturi',
    ];
    $request->requestBody->tag = 'v3.1.4159';
    $request->projectSlug = 'cum';

    $response = $sdk->pipeline->triggerPipeline($request);

    if ($response->pipelineCreation !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\CircleCi\Models\Operations\TriggerPipelineRequest](../../models/operations/TriggerPipelineRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\CircleCi\Models\Operations\TriggerPipelineResponse](../../models/operations/TriggerPipelineResponse.md)**

