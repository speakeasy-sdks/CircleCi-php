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
use \CircleCi\Models\Operations\CreateScheduleCreateScheduleParametersAttributionActorEnum;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateScheduleRequest();
    $request->requestBody = new CreateScheduleCreateScheduleParameters();
    $request->requestBody->attributionActor = CreateScheduleCreateScheduleParametersAttributionActorEnum::CURRENT;
    $request->requestBody->description = 'similique';
    $request->requestBody->name = 'Cristina Hahn';
    $request->requestBody->parameters = [
        'officiis' => 'qui',
        'dolorum' => 'a',
        'esse' => 'harum',
        'iusto' => 'ipsum',
    ];
    $request->requestBody->timetable = new CreateScheduleCreateScheduleParametersTimetable2();
    $request->requestBody->timetable->daysOfMonth = [
        229442,
        730856,
        880298,
        253941,
    ];
    $request->requestBody->timetable->daysOfWeek = [
        CreateScheduleCreateScheduleParametersTimetable2DaysOfWeekEnum::SAT,
        CreateScheduleCreateScheduleParametersTimetable2DaysOfWeekEnum::FRI,
    ];
    $request->requestBody->timetable->hoursOfDay = [
        471752,
        25662,
        711584,
    ];
    $request->requestBody->timetable->months = [
        CreateScheduleCreateScheduleParametersTimetable2MonthsEnum::NOV,
    ];
    $request->requestBody->timetable->perHour = 424685;
    $request->projectSlug = 'libero';

    $response = $sdk->schedule->createSchedule($request);

    if ($response->schedule !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->scheduleId = '5a73429c-db1a-4842-abb6-79d2322715bf';

    $response = $sdk->schedule->deleteScheduleById($request);

    if ($response->messageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->scheduleId = '0cbb1e31-b8b9-40f3-843a-1108e0adcf4b';

    $response = $sdk->schedule->getScheduleById($request);

    if ($response->schedule !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->pageToken = 'cupiditate';
    $request->projectSlug = 'qui';

    $response = $sdk->schedule->listSchedulesForProject($request);

    if ($response->listSchedulesForProject200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
use \CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersAttributionActorEnum;
use \CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersTimetable;
use \CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersTimetableDaysOfWeekEnum;
use \CircleCi\Models\Operations\UpdateScheduleUpdateScheduleParametersTimetableMonthsEnum;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UpdateScheduleRequest();
    $request->requestBody = new UpdateScheduleUpdateScheduleParameters();
    $request->requestBody->attributionActor = UpdateScheduleUpdateScheduleParametersAttributionActorEnum::CURRENT;
    $request->requestBody->description = 'quae';
    $request->requestBody->name = 'Darren McClure';
    $request->requestBody->parameters = [
        'omnis' => 'quis',
        'ipsum' => 'delectus',
        'voluptate' => 'consectetur',
        'vero' => 'tenetur',
    ];
    $request->requestBody->timetable = new UpdateScheduleUpdateScheduleParametersTimetable();
    $request->requestBody->timetable->daysOfMonth = [
        941378,
        715561,
    ];
    $request->requestBody->timetable->daysOfWeek = [
        UpdateScheduleUpdateScheduleParametersTimetableDaysOfWeekEnum::MON,
        UpdateScheduleUpdateScheduleParametersTimetableDaysOfWeekEnum::THU,
        UpdateScheduleUpdateScheduleParametersTimetableDaysOfWeekEnum::THU,
        UpdateScheduleUpdateScheduleParametersTimetableDaysOfWeekEnum::FRI,
    ];
    $request->requestBody->timetable->hoursOfDay = [
        293020,
        844550,
    ];
    $request->requestBody->timetable->months = [
        UpdateScheduleUpdateScheduleParametersTimetableMonthsEnum::DEC,
        UpdateScheduleUpdateScheduleParametersTimetableMonthsEnum::APR,
        UpdateScheduleUpdateScheduleParametersTimetableMonthsEnum::AUG,
        UpdateScheduleUpdateScheduleParametersTimetableMonthsEnum::MAR,
    ];
    $request->requestBody->timetable->perHour = 974259;
    $request->scheduleId = '5d2cff7c-70a4-4562-ad43-6813f16d9f5f';

    $response = $sdk->schedule->updateSchedule($request);

    if ($response->schedule !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
