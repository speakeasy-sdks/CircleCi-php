<!-- Start SDK Example Usage -->
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
    $request->contextId = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->envVarName = 'deserunt';

    $response = $sdk->context->addEnvironmentVariableToContext($request);

    if ($response->addEnvironmentVariableToContext200ApplicationJSONAnyOf !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->