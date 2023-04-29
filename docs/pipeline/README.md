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
    $request->configuration = 'praesentium';
    $request->continuationKey = 'natus';
    $request->parameters = [
        'sunt' => 'quo',
    ];

    $response = $sdk->pipeline->continuePipeline($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->pipelineId = 'ddc69260-1fb5-476b-8d5f-0d30c5fbb258';

    $response = $sdk->pipeline->getPipelineById($request);

    if ($response->pipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->pipelineNumber = 'dignissimos';
    $request->projectSlug = 'eaque';

    $response = $sdk->pipeline->getPipelineByNumber($request);

    if ($response->pipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->pipelineId = '53202c73-d5fe-49b9-8c28-909b3fe49a8d';

    $response = $sdk->pipeline->getPipelineConfigById($request);

    if ($response->pipelineConfig !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->pageToken = 'provident';
    $request->projectSlug = 'nobis';

    $response = $sdk->pipeline->listMyPipelines($request);

    if ($response->pipelineListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->orgSlug = 'libero';
    $request->pageToken = 'delectus';

    $response = $sdk->pipeline->listPipelines($request);

    if ($response->pipelineListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->branch = 'quaerat';
    $request->pageToken = 'quos';
    $request->projectSlug = 'aliquid';

    $response = $sdk->pipeline->listPipelinesForProject($request);

    if ($response->pipelineListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->pageToken = 'dolorem';
    $request->pipelineId = '3323f9b7-7f3a-4410-8674-ebf69280d1ba';

    $response = $sdk->pipeline->listWorkflowsByPipelineId($request);

    if ($response->workflowListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
        'voluptate' => 'dolorum',
        'deleniti' => 'omnis',
    ];
    $request->requestBody->tag = 'v3.1.4159';
    $request->projectSlug = 'necessitatibus';

    $response = $sdk->pipeline->triggerPipeline($request);

    if ($response->pipelineCreation !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
