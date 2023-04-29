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
    $request->jobNumber = 'nihil';
    $request->projectSlug = 'repellat';

    $response = $sdk->job->cancelJob($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->jobNumber = 'quibusdam';
    $request->projectSlug = 'sed';

    $response = $sdk->job->getJobArtifacts($request);

    if ($response->artifactListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->jobNumber = 'saepe';
    $request->projectSlug = 'pariatur';

    $response = $sdk->job->getJobDetails($request);

    if ($response->jobDetails !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->jobNumber = 'accusantium';
    $request->projectSlug = 'consequuntur';

    $response = $sdk->job->getTests($request);

    if ($response->testsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
