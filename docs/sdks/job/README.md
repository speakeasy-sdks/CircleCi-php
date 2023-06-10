# job

### Available Operations

* [cancelJob](#canceljob) - Cancel job
* [getJobArtifacts](#getjobartifacts) - Get a job's artifacts
* [getJobDetails](#getjobdetails) - Get job details
* [getTests](#gettests) - Get test metadata

## cancelJob

Cancel job with a given job number.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\CancelJobRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CancelJobRequest();
    $request->jobNumber = 'ullam';
    $request->projectSlug = 'provident';

    $response = $sdk->job->cancelJob($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\CircleCi\Models\Operations\CancelJobRequest](../../models/operations/CancelJobRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\CircleCi\Models\Operations\CancelJobResponse](../../models/operations/CancelJobResponse.md)**


## getJobArtifacts

Returns a job's artifacts.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetJobArtifactsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetJobArtifactsRequest();
    $request->jobNumber = 'quos';
    $request->projectSlug = 'sint';

    $response = $sdk->job->getJobArtifacts($request);

    if ($response->artifactListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\CircleCi\Models\Operations\GetJobArtifactsRequest](../../models/operations/GetJobArtifactsRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\CircleCi\Models\Operations\GetJobArtifactsResponse](../../models/operations/GetJobArtifactsResponse.md)**


## getJobDetails

Returns job details.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetJobDetailsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetJobDetailsRequest();
    $request->jobNumber = 'accusantium';
    $request->projectSlug = 'mollitia';

    $response = $sdk->job->getJobDetails($request);

    if ($response->jobDetails !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\CircleCi\Models\Operations\GetJobDetailsRequest](../../models/operations/GetJobDetailsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\CircleCi\Models\Operations\GetJobDetailsResponse](../../models/operations/GetJobDetailsResponse.md)**


## getTests

Get test metadata for a build. In the rare case where there is more than 250MB of test data on the job, no results will be returned.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetTestsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetTestsRequest();
    $request->jobNumber = 'reiciendis';
    $request->projectSlug = 'mollitia';

    $response = $sdk->job->getTests($request);

    if ($response->testsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `$request`                                                                                | [\CircleCi\Models\Operations\GetTestsRequest](../../models/operations/GetTestsRequest.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\CircleCi\Models\Operations\GetTestsResponse](../../models/operations/GetTestsResponse.md)**

