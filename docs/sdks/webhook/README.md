# webhook

### Available Operations

* [createWebhook](#createwebhook) - Create a webhook
* [deleteWebhook](#deletewebhook) - Delete a webhook
* [getWebhookById](#getwebhookbyid) - Get a webhook
* [getWebhooks](#getwebhooks) - List webhooks
* [updateWebhook](#updatewebhook) - Update a webhook

## createWebhook

Create a webhook

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\CreateWebhookRequestBody;
use \CircleCi\Models\Operations\CreateWebhookRequestBodyEvents;
use \CircleCi\Models\Operations\CreateWebhookRequestBodyScope;
use \CircleCi\Models\Operations\CreateWebhookRequestBodyScopeType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateWebhookRequestBody();
    $request->events = [
        CreateWebhookRequestBodyEvents::JobCompleted,
        CreateWebhookRequestBodyEvents::JobCompleted,
    ];
    $request->name = 'Nathaniel Ryan';
    $request->scope = new CreateWebhookRequestBodyScope();
    $request->scope->id = '6146c3e2-50fb-4008-842e-141aac366c8d';
    $request->scope->type = CreateWebhookRequestBodyScopeType::Project;
    $request->signingSecret = 'nulla';
    $request->url = 'voluptas';
    $request->verifyTls = false;

    $response = $sdk->webhook->createWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\CircleCi\Models\Operations\CreateWebhookRequestBody](../../models/operations/CreateWebhookRequestBody.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\CircleCi\Models\Operations\CreateWebhookResponse](../../models/operations/CreateWebhookResponse.md)**


## deleteWebhook

Delete a webhook

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\DeleteWebhookRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteWebhookRequest();
    $request->webhookId = 'b1442907-4747-478a-bbd4-66d28c10ab3c';

    $response = $sdk->webhook->deleteWebhook($request);

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
| `$request`                                                                                          | [\CircleCi\Models\Operations\DeleteWebhookRequest](../../models/operations/DeleteWebhookRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\CircleCi\Models\Operations\DeleteWebhookResponse](../../models/operations/DeleteWebhookResponse.md)**


## getWebhookById

Get a webhook by id.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetWebhookByIdRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetWebhookByIdRequest();
    $request->webhookId = 'dca42519-04e5-423c-be0b-c7178e4796f2';

    $response = $sdk->webhook->getWebhookById($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\CircleCi\Models\Operations\GetWebhookByIdRequest](../../models/operations/GetWebhookByIdRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\CircleCi\Models\Operations\GetWebhookByIdResponse](../../models/operations/GetWebhookByIdResponse.md)**


## getWebhooks

Get a list of webhook that match the given scope-type and scope-id

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetWebhooksRequest;
use \CircleCi\Models\Operations\GetWebhooksScopeType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetWebhooksRequest();
    $request->scopeId = 'a70c6882-82aa-4482-962f-222e9817ee17';
    $request->scopeType = GetWebhooksScopeType::Project;

    $response = $sdk->webhook->getWebhooks($request);

    if ($response->getWebhooks200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\CircleCi\Models\Operations\GetWebhooksRequest](../../models/operations/GetWebhooksRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\CircleCi\Models\Operations\GetWebhooksResponse](../../models/operations/GetWebhooksResponse.md)**


## updateWebhook

Update a webhook

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\UpdateWebhookRequest;
use \CircleCi\Models\Operations\UpdateWebhookRequestBody;
use \CircleCi\Models\Operations\UpdateWebhookRequestBodyEvents;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UpdateWebhookRequest();
    $request->requestBody = new UpdateWebhookRequestBody();
    $request->requestBody->events = [
        UpdateWebhookRequestBodyEvents::JobCompleted,
        UpdateWebhookRequestBodyEvents::JobCompleted,
        UpdateWebhookRequestBodyEvents::WorkflowCompleted,
        UpdateWebhookRequestBodyEvents::WorkflowCompleted,
    ];
    $request->requestBody->name = 'Cecil Pollich';
    $request->requestBody->signingSecret = 'occaecati';
    $request->requestBody->url = 'minima';
    $request->requestBody->verifyTls = false;
    $request->webhookId = 'bc0ab3c2-0c4f-4378-9fd8-71f99dd2efd1';

    $response = $sdk->webhook->updateWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\CircleCi\Models\Operations\UpdateWebhookRequest](../../models/operations/UpdateWebhookRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\CircleCi\Models\Operations\UpdateWebhookResponse](../../models/operations/UpdateWebhookResponse.md)**

