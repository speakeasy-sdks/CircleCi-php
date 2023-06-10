# context

### Available Operations

* [addEnvironmentVariableToContext](#addenvironmentvariabletocontext) - Add or update an environment variable
* [createContext](#createcontext) - Create a new context
* [deleteContext](#deletecontext) - Delete a context
* [deleteEnvironmentVariableFromContext](#deleteenvironmentvariablefromcontext) - Remove an environment variable
* [getContext](#getcontext) - Get a context
* [listContexts](#listcontexts) - List contexts
* [listEnvironmentVariablesFromContext](#listenvironmentvariablesfromcontext) - List environment variables

## addEnvironmentVariableToContext

Create or update an environment variable within a context. Returns information about the environment variable, not including its value.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\AddEnvironmentVariableToContextRequest;
use \CircleCi\Models\Operations\AddEnvironmentVariableToContextRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new AddEnvironmentVariableToContextRequest();
    $request->requestBody = new AddEnvironmentVariableToContextRequestBody();
    $request->requestBody->value = 'some-secret-value';
    $request->contextId = '05dfc2dd-f7cc-478c-a1ba-928fc816742c';
    $request->envVarName = 'cum';

    $response = $sdk->context->addEnvironmentVariableToContext($request);

    if ($response->addEnvironmentVariableToContext200ApplicationJSONAnyOf !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\CircleCi\Models\Operations\AddEnvironmentVariableToContextRequest](../../models/operations/AddEnvironmentVariableToContextRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\CircleCi\Models\Operations\AddEnvironmentVariableToContextResponse](../../models/operations/AddEnvironmentVariableToContextResponse.md)**


## createContext

Create a new context

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\CreateContextRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateContextRequestBody();
    $request->name = 'Edna Mante II';
    $request->owner = new CreateContextRequestBodyOwner2();
    $request->owner->slug = 'sed';
    $request->owner->type = CreateContextRequestBodyOwner2Type::Organization;

    $response = $sdk->context->createContext($request);

    if ($response->context !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\CircleCi\Models\Operations\CreateContextRequestBody](../../models/operations/CreateContextRequestBody.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\CircleCi\Models\Operations\CreateContextResponse](../../models/operations/CreateContextResponse.md)**


## deleteContext

Delete a context

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\DeleteContextRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteContextRequest();
    $request->contextId = '9396fea7-596e-4b10-baaa-2352c5955907';

    $response = $sdk->context->deleteContext($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\CircleCi\Models\Operations\DeleteContextRequest](../../models/operations/DeleteContextRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\CircleCi\Models\Operations\DeleteContextResponse](../../models/operations/DeleteContextResponse.md)**


## deleteEnvironmentVariableFromContext

Delete an environment variable from a context.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\DeleteEnvironmentVariableFromContextRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteEnvironmentVariableFromContextRequest();
    $request->contextId = 'aff1a3a2-fa94-4677-b925-1aa52c3f5ad0';
    $request->envVarName = 'quasi';

    $response = $sdk->context->deleteEnvironmentVariableFromContext($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\CircleCi\Models\Operations\DeleteEnvironmentVariableFromContextRequest](../../models/operations/DeleteEnvironmentVariableFromContextRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\CircleCi\Models\Operations\DeleteEnvironmentVariableFromContextResponse](../../models/operations/DeleteEnvironmentVariableFromContextResponse.md)**


## getContext

Returns basic information about a context.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetContextRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetContextRequest();
    $request->contextId = '9da1ffe7-8f09-47b0-874f-15471b5e6e13';

    $response = $sdk->context->getContext($request);

    if ($response->context !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\CircleCi\Models\Operations\GetContextRequest](../../models/operations/GetContextRequest.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\CircleCi\Models\Operations\GetContextResponse](../../models/operations/GetContextResponse.md)**


## listContexts

List all contexts for an owner.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ListContextsRequest;
use \CircleCi\Models\Operations\ListContextsOwnerType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListContextsRequest();
    $request->ownerId = 'b99d488e-1e91-4e45-8ad2-abd44269802d';
    $request->ownerSlug = 'ipsam';
    $request->ownerType = ListContextsOwnerType::Account;
    $request->pageToken = 'fugit';

    $response = $sdk->context->listContexts($request);

    if ($response->listContexts200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\CircleCi\Models\Operations\ListContextsRequest](../../models/operations/ListContextsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\CircleCi\Models\Operations\ListContextsResponse](../../models/operations/ListContextsResponse.md)**


## listEnvironmentVariablesFromContext

List information about environment variables in a context, not including their values.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ListEnvironmentVariablesFromContextRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListEnvironmentVariablesFromContextRequest();
    $request->contextId = 'a94bb4f6-3c96-49e9-a3ef-a77dfb14cd66';
    $request->pageToken = 'laborum';

    $response = $sdk->context->listEnvironmentVariablesFromContext($request);

    if ($response->listEnvironmentVariablesFromContext200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\CircleCi\Models\Operations\ListEnvironmentVariablesFromContextRequest](../../models/operations/ListEnvironmentVariablesFromContextRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\CircleCi\Models\Operations\ListEnvironmentVariablesFromContextResponse](../../models/operations/ListEnvironmentVariablesFromContextResponse.md)**

