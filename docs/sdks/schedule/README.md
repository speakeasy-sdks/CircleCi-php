# schedule

### Available Operations

* [createSchedule](#createschedule) - Create a schedule
* [deleteScheduleById](#deleteschedulebyid) - Delete a schedule
* [getScheduleById](#getschedulebyid) - Get a schedule
* [listSchedulesForProject](#listschedulesforproject) - Get all schedules
* [updateSchedule](#updateschedule) - Update a schedule

## createSchedule

Creates a schedule and returns the created schedule.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\CreateScheduleRequest;
use \CircleCi\Models\Operations\CreateScheduleCreateScheduleParameters;
use \CircleCi\Models\Operations\CreateScheduleCreateScheduleParametersAttributionActor;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateScheduleRequest();
    $request->requestBody = new CreateScheduleCreateScheduleParameters();
    $request->requestBody->attributionActor = CreateScheduleCreateScheduleParametersAttributionActor::Current;
    $request->requestBody->description = 'soluta';
    $request->requestBody->name = 'Ted Kling';
    $request->requestBody->parameters = [
        'necessitatibus' => 'distinctio',
        'asperiores' => 'nihil',
        'ipsum' => 'voluptate',
    ];
    $request->requestBody->timetable = new CreateScheduleCreateScheduleParametersTimetable2();
    $request->requestBody->timetable->daysOfMonth = [
        263322,
        137220,
        20651,
        229219,
    ];
    $request->requestBody->timetable->daysOfWeek = [
        CreateScheduleCreateScheduleParametersTimetable2DaysOfWeek::Fri,
        CreateScheduleCreateScheduleParametersTimetable2DaysOfWeek::Sun,
        CreateScheduleCreateScheduleParametersTimetable2DaysOfWeek::Fri,
        CreateScheduleCreateScheduleParametersTimetable2DaysOfWeek::Sun,
    ];
    $request->requestBody->timetable->hoursOfDay = [
        588317,
        324683,
        831049,
    ];
    $request->requestBody->timetable->months = [
        CreateScheduleCreateScheduleParametersTimetable2Months::Apr,
        CreateScheduleCreateScheduleParametersTimetable2Months::Mar,
        CreateScheduleCreateScheduleParametersTimetable2Months::Jan,
    ];
    $request->requestBody->timetable->perHour = 311860;
    $request->projectSlug = 'tempora';

    $response = $sdk->schedule->createSchedule($request);

    if ($response->schedule !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\CircleCi\Models\Operations\CreateScheduleRequest](../../models/operations/CreateScheduleRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\CircleCi\Models\Operations\CreateScheduleResponse](../../models/operations/CreateScheduleResponse.md)**


## deleteScheduleById

Deletes the schedule by id.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\DeleteScheduleByIdRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteScheduleByIdRequest();
    $request->scheduleId = '6ce2af7a-73cf-43be-853f-870b326b5a73';

    $response = $sdk->schedule->deleteScheduleById($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\CircleCi\Models\Operations\DeleteScheduleByIdRequest](../../models/operations/DeleteScheduleByIdRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\CircleCi\Models\Operations\DeleteScheduleByIdResponse](../../models/operations/DeleteScheduleByIdResponse.md)**


## getScheduleById

Get a schedule by id.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\GetScheduleByIdRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetScheduleByIdRequest();
    $request->scheduleId = '429cdb1a-8422-4bb6-b9d2-322715bf0cbb';

    $response = $sdk->schedule->getScheduleById($request);

    if ($response->schedule !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\CircleCi\Models\Operations\GetScheduleByIdRequest](../../models/operations/GetScheduleByIdRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\CircleCi\Models\Operations\GetScheduleByIdResponse](../../models/operations/GetScheduleByIdResponse.md)**


## listSchedulesForProject

Returns all schedules for this project.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\ListSchedulesForProjectRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListSchedulesForProjectRequest();
    $request->pageToken = 'et';
    $request->projectSlug = 'saepe';

    $response = $sdk->schedule->listSchedulesForProject($request);

    if ($response->listSchedulesForProject200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\CircleCi\Models\Operations\ListSchedulesForProjectRequest](../../models/operations/ListSchedulesForProjectRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\CircleCi\Models\Operations\ListSchedulesForProjectResponse](../../models/operations/ListSchedulesForProjectResponse.md)**


## updateSchedule

Updates a schedule and returns the updated schedule.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \CircleCi\SDK;
use \CircleCi\Models\Shared\Security;
use \CircleCi\Models\Shared\SchemeBasicAuth;
use \CircleCi\Models\Operations\UpdateScheduleRequest;
use \CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParameters;
use \CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersAttributionActor;
use \CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersTimetable;
use \CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersTimetableDaysOfWeek;
use \CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersTimetableMonths;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UpdateScheduleRequest();
    $request->requestBody = new UpdateScheduleUpdateScheduleParameters();
    $request->requestBody->attributionActor = UpdateScheduleUpdateScheduleParametersAttributionActor::Current;
    $request->requestBody->description = 'ipsum';
    $request->requestBody->name = 'Gayle Lueilwitz';
    $request->requestBody->parameters = [
        'delectus' => 'dolorem',
    ];
    $request->requestBody->timetable = new UpdateScheduleUpdateScheduleParametersTimetable();
    $request->requestBody->timetable->daysOfMonth = [
        286915,
        240829,
    ];
    $request->requestBody->timetable->daysOfWeek = [
        UpdateScheduleUpdateScheduleParametersTimetableDaysOfWeek::Tue,
        UpdateScheduleUpdateScheduleParametersTimetableDaysOfWeek::Tue,
        UpdateScheduleUpdateScheduleParametersTimetableDaysOfWeek::Tue,
    ];
    $request->requestBody->timetable->hoursOfDay = [
        929530,
        9240,
        669917,
    ];
    $request->requestBody->timetable->months = [
        UpdateScheduleUpdateScheduleParametersTimetableMonths::Aug,
        UpdateScheduleUpdateScheduleParametersTimetableMonths::Jul,
        UpdateScheduleUpdateScheduleParametersTimetableMonths::Jun,
        UpdateScheduleUpdateScheduleParametersTimetableMonths::Sep,
    ];
    $request->requestBody->timetable->perHour = 586410;
    $request->scheduleId = '21879fce-953f-473e-b7fb-c7abd74dd39c';

    $response = $sdk->schedule->updateSchedule($request);

    if ($response->schedule !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\CircleCi\Models\Operations\UpdateScheduleRequest](../../models/operations/UpdateScheduleRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\CircleCi\Models\Operations\UpdateScheduleResponse](../../models/operations/UpdateScheduleResponse.md)**

