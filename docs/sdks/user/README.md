# user

### Available Operations

* [getCollaborations](#getcollaborations) - Collaborations
* [getCurrentUser](#getcurrentuser) - User Information
* [getUser](#getuser) - User Information

## getCollaborations

Provides the set of organizations of which a user is a member or a collaborator.

The set of organizations that a user can collaborate on is composed of:

* Organizations that the current user belongs to across VCS types (e.g. BitBucket, GitHub)
* The parent organization of repository that the user can collaborate on, but is not necessarily a member of
* The organization of the current user's account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->user->getCollaborations();

    if ($response->collaborations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\CircleCi\Models\Operations\GetCollaborationsResponse](../../models/operations/GetCollaborationsResponse.md)**


## getCurrentUser

Provides information about the user that is currently signed in.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->user->getCurrentUser();

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\CircleCi\Models\Operations\GetCurrentUserResponse](../../models/operations/GetCurrentUserResponse.md)**


## getUser

Provides information about the user with the given ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetUserRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetUserRequest();
    $request->id = '0f5d2cff-7c70-4a45-a26d-436813f16d9f';

    $response = $sdk->user->getUser($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                               | Type                                                                                    | Required                                                                                | Description                                                                             |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `$request`                                                                              | [\CircleCi\Models\Operations\GetUserRequest](../../models/operations/GetUserRequest.md) | :heavy_check_mark:                                                                      | The request object to use for the request.                                              |


### Response

**[?\CircleCi\Models\Operations\GetUserResponse](../../models/operations/GetUserResponse.md)**

