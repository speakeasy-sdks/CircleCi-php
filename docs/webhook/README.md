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
        CreateWebhookRequestBodyEvents::WORKFLOW_COMPLETED,
    ];
    $request->name = 'Vicky Lynch';
    $request->scope = new CreateWebhookRequestBodyScope();
    $request->scope->id = '6b144290-7474-4778-a7bd-466d28c10ab3';
    $request->scope->type = CreateWebhookRequestBodyScopeType::PROJECT;
    $request->signingSecret = 'quo';
    $request->url = 'illum';
    $request->verifyTls = false;

    $response = $sdk->webhook->createWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->webhookId = 'ca425190-4e52-43c7-a0bc-7178e4796f2a';

    $response = $sdk->webhook->deleteWebhook($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->webhookId = '70c68828-2aa4-4825-a2f2-22e9817ee17c';

    $response = $sdk->webhook->getWebhookById($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->scopeId = 'be61e6b7-b95b-4c0a-b3c2-0c4f3789fd87';
    $request->scopeType = GetWebhooksScopeType::PROJECT;

    $response = $sdk->webhook->getWebhooks($request);

    if ($response->getWebhooks200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
        UpdateWebhookRequestBodyEvents::JOB_COMPLETED,
    ];
    $request->requestBody->name = 'Kirk Stracke';
    $request->requestBody->signingSecret = 'eveniet';
    $request->requestBody->url = 'asperiores';
    $request->requestBody->verifyTls = false;
    $request->webhookId = 'd121aa6f-1e67-44bd-b04f-15756082d68e';

    $response = $sdk->webhook->updateWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
