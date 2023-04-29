# project

### Available Operations

* [createCheckoutKey](#createcheckoutkey) - Create a new checkout key
* [createEnvVar](#createenvvar) - Create an environment variable
* [deleteCheckoutKey](#deletecheckoutkey) - Delete a checkout key
* [deleteEnvVar](#deleteenvvar) - Delete an environment variable
* [getCheckoutKey](#getcheckoutkey) - Get a checkout key
* [getEnvVar](#getenvvar) - Get a masked environment variable
* [getProjectBySlug](#getprojectbyslug) - Get a project
* [listCheckoutKeys](#listcheckoutkeys) - Get all checkout keys
* [listEnvVars](#listenvvars) - List all environment variables

## createCheckoutKey

Creates a new checkout key. This API request is only usable with a user API token.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\CreateCheckoutKeyRequest;
use \CircleCi\Models\Operations\CreateCheckoutKeyCheckoutKeyInput;
use \CircleCi\Models\Operations\CreateCheckoutKeyCheckoutKeyInputCheckoutKeyInputTypeEnum;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateCheckoutKeyRequest();
    $request->requestBody = new CreateCheckoutKeyCheckoutKeyInput();
    $request->requestBody->type = CreateCheckoutKeyCheckoutKeyInputCheckoutKeyInputTypeEnum::DEPLOY_KEY;
    $request->projectSlug = 'distinctio';

    $response = $sdk->project->createCheckoutKey($request);

    if ($response->checkoutKey !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## createEnvVar

Creates a new environment variable.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\CreateEnvVarRequest;
use \CircleCi\Models\Operations\CreateEnvVarEnvironmentVariablePair;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateEnvVarRequest();
    $request->requestBody = new CreateEnvVarEnvironmentVariablePair();
    $request->requestBody->name = 'foo';
    $request->requestBody->value = 'xxxx1234';
    $request->projectSlug = 'asperiores';

    $response = $sdk->project->createEnvVar($request);

    if ($response->environmentVariablePair !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## deleteCheckoutKey

Deletes the checkout key.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\DeleteCheckoutKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteCheckoutKeyRequest();
    $request->fingerprint = 'nihil';
    $request->projectSlug = 'ipsum';

    $response = $sdk->project->deleteCheckoutKey($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## deleteEnvVar

Deletes the environment variable named :name.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\DeleteEnvVarRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteEnvVarRequest();
    $request->name = 'Alberta Ullrich';
    $request->projectSlug = 'perferendis';

    $response = $sdk->project->deleteEnvVar($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getCheckoutKey

Returns an individual checkout key.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetCheckoutKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetCheckoutKeyRequest();
    $request->fingerprint = 'amet';
    $request->projectSlug = 'optio';

    $response = $sdk->project->getCheckoutKey($request);

    if ($response->checkoutKey !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getEnvVar

Returns the masked value of environment variable :name.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetEnvVarRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetEnvVarRequest();
    $request->name = 'Tommy Turner';
    $request->projectSlug = 'provident';

    $response = $sdk->project->getEnvVar($request);

    if ($response->environmentVariablePair !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getProjectBySlug

Retrieves a project by project slug.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetProjectBySlugRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetProjectBySlugRequest();
    $request->projectSlug = 'minima';

    $response = $sdk->project->getProjectBySlug($request);

    if ($response->project !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## listCheckoutKeys

Returns a sequence of checkout keys for `:project`.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ListCheckoutKeysRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListCheckoutKeysRequest();
    $request->projectSlug = 'repellendus';

    $response = $sdk->project->listCheckoutKeys($request);

    if ($response->checkoutKeyListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## listEnvVars

Returns four 'x' characters, in addition to the last four ASCII characters of the value, consistent with the display of environment variable values on the CircleCI website.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ListEnvVarsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListEnvVarsRequest();
    $request->projectSlug = 'totam';

    $response = $sdk->project->listEnvVars($request);

    if ($response->environmentVariableListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
