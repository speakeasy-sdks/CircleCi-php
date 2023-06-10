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
use \CircleCi\Models\Operations\CreateCheckoutKeyCheckoutKeyInputCheckoutKeyInputType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateCheckoutKeyRequest();
    $request->requestBody = new CreateCheckoutKeyCheckoutKeyInput();
    $request->requestBody->type = CreateCheckoutKeyCheckoutKeyInputCheckoutKeyInputType::DeployKey;
    $request->projectSlug = 'voluptate';

    $response = $sdk->project->createCheckoutKey($request);

    if ($response->checkoutKey !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\CircleCi\Models\Operations\CreateCheckoutKeyRequest](../../models/operations/CreateCheckoutKeyRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\CircleCi\Models\Operations\CreateCheckoutKeyResponse](../../models/operations/CreateCheckoutKeyResponse.md)**


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
    $request->projectSlug = 'dignissimos';

    $response = $sdk->project->createEnvVar($request);

    if ($response->environmentVariablePair !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\CircleCi\Models\Operations\CreateEnvVarRequest](../../models/operations/CreateEnvVarRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\CircleCi\Models\Operations\CreateEnvVarResponse](../../models/operations/CreateEnvVarResponse.md)**


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
    $request->fingerprint = 'reiciendis';
    $request->projectSlug = 'amet';

    $response = $sdk->project->deleteCheckoutKey($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\CircleCi\Models\Operations\DeleteCheckoutKeyRequest](../../models/operations/DeleteCheckoutKeyRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\CircleCi\Models\Operations\DeleteCheckoutKeyResponse](../../models/operations/DeleteCheckoutKeyResponse.md)**


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
    $request->name = 'Mr. Bradley Bogan';
    $request->projectSlug = 'odio';

    $response = $sdk->project->deleteEnvVar($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\CircleCi\Models\Operations\DeleteEnvVarRequest](../../models/operations/DeleteEnvVarRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\CircleCi\Models\Operations\DeleteEnvVarResponse](../../models/operations/DeleteEnvVarResponse.md)**


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
    $request->fingerprint = 'quaerat';
    $request->projectSlug = 'accusamus';

    $response = $sdk->project->getCheckoutKey($request);

    if ($response->checkoutKey !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\CircleCi\Models\Operations\GetCheckoutKeyRequest](../../models/operations/GetCheckoutKeyRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\CircleCi\Models\Operations\GetCheckoutKeyResponse](../../models/operations/GetCheckoutKeyResponse.md)**


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
    $request->name = 'Jan Hodkiewicz';
    $request->projectSlug = 'atque';

    $response = $sdk->project->getEnvVar($request);

    if ($response->environmentVariablePair !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\CircleCi\Models\Operations\GetEnvVarRequest](../../models/operations/GetEnvVarRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\CircleCi\Models\Operations\GetEnvVarResponse](../../models/operations/GetEnvVarResponse.md)**


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
    $request->projectSlug = 'sit';

    $response = $sdk->project->getProjectBySlug($request);

    if ($response->project !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\CircleCi\Models\Operations\GetProjectBySlugRequest](../../models/operations/GetProjectBySlugRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\CircleCi\Models\Operations\GetProjectBySlugResponse](../../models/operations/GetProjectBySlugResponse.md)**


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
    $request->projectSlug = 'fugiat';

    $response = $sdk->project->listCheckoutKeys($request);

    if ($response->checkoutKeyListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\CircleCi\Models\Operations\ListCheckoutKeysRequest](../../models/operations/ListCheckoutKeysRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\CircleCi\Models\Operations\ListCheckoutKeysResponse](../../models/operations/ListCheckoutKeysResponse.md)**


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
    $request->projectSlug = 'ab';

    $response = $sdk->project->listEnvVars($request);

    if ($response->environmentVariableListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\CircleCi\Models\Operations\ListEnvVarsRequest](../../models/operations/ListEnvVarsRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\CircleCi\Models\Operations\ListEnvVarsResponse](../../models/operations/ListEnvVarsResponse.md)**

