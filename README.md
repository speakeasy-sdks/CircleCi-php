# drevops/circleci-sdk

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/CircleCi-PHP-SDK.git"
        }
    ],
    "require": {
        "drevops/circleci-php-sdk": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
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

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [context](docs/sdks/context/README.md)

* [addEnvironmentVariableToContext](docs/sdks/context/README.md#addenvironmentvariabletocontext) - Add or update an environment variable
* [createContext](docs/sdks/context/README.md#createcontext) - Create a new context
* [deleteContext](docs/sdks/context/README.md#deletecontext) - Delete a context
* [deleteEnvironmentVariableFromContext](docs/sdks/context/README.md#deleteenvironmentvariablefromcontext) - Remove an environment variable
* [getContext](docs/sdks/context/README.md#getcontext) - Get a context
* [listContexts](docs/sdks/context/README.md#listcontexts) - List contexts
* [listEnvironmentVariablesFromContext](docs/sdks/context/README.md#listenvironmentvariablesfromcontext) - List environment variables

### [insights](docs/sdks/insights/README.md)

* [getAllInsightsBranches](docs/sdks/insights/README.md#getallinsightsbranches) - Get all branches for a project
* [getFlakyTests](docs/sdks/insights/README.md#getflakytests) - Get flaky tests for a project
* [getJobTimeseries](docs/sdks/insights/README.md#getjobtimeseries) - Job timeseries data
* [getOrgSummaryData](docs/sdks/insights/README.md#getorgsummarydata) - Get summary metrics with trends for the entire org, and for each project.
* [getProjectWorkflowJobMetrics](docs/sdks/insights/README.md#getprojectworkflowjobmetrics) - Get summary metrics for a project workflow's jobs.
* [getProjectWorkflowMetrics](docs/sdks/insights/README.md#getprojectworkflowmetrics) - Get summary metrics for a project's workflows
* [getProjectWorkflowRuns](docs/sdks/insights/README.md#getprojectworkflowruns) - Get recent runs of a workflow
* [getProjectWorkflowTestMetrics](docs/sdks/insights/README.md#getprojectworkflowtestmetrics) - Get test metrics for a project's workflows
* [getProjectWorkflowsPageData](docs/sdks/insights/README.md#getprojectworkflowspagedata) - Get summary metrics and trends for a project across it's workflows and branches
* [getWorkflowSummary](docs/sdks/insights/README.md#getworkflowsummary) - Get metrics and trends for workflows

### [job](docs/sdks/job/README.md)

* [cancelJob](docs/sdks/job/README.md#canceljob) - Cancel job
* [getJobArtifacts](docs/sdks/job/README.md#getjobartifacts) - Get a job's artifacts
* [getJobDetails](docs/sdks/job/README.md#getjobdetails) - Get job details
* [getTests](docs/sdks/job/README.md#gettests) - Get test metadata

### [pipeline](docs/sdks/pipeline/README.md)

* [continuePipeline](docs/sdks/pipeline/README.md#continuepipeline) - Continue a pipeline
* [getPipelineById](docs/sdks/pipeline/README.md#getpipelinebyid) - Get a pipeline by ID
* [getPipelineByNumber](docs/sdks/pipeline/README.md#getpipelinebynumber) - Get a pipeline by pipeline number
* [getPipelineConfigById](docs/sdks/pipeline/README.md#getpipelineconfigbyid) - Get a pipeline's configuration
* [listMyPipelines](docs/sdks/pipeline/README.md#listmypipelines) - Get your pipelines
* [listPipelines](docs/sdks/pipeline/README.md#listpipelines) - Get a list of pipelines
* [listPipelinesForProject](docs/sdks/pipeline/README.md#listpipelinesforproject) - Get all pipelines
* [listWorkflowsByPipelineId](docs/sdks/pipeline/README.md#listworkflowsbypipelineid) - Get a pipeline's workflows
* [triggerPipeline](docs/sdks/pipeline/README.md#triggerpipeline) - Trigger a new pipeline

### [project](docs/sdks/project/README.md)

* [createCheckoutKey](docs/sdks/project/README.md#createcheckoutkey) - Create a new checkout key
* [createEnvVar](docs/sdks/project/README.md#createenvvar) - Create an environment variable
* [deleteCheckoutKey](docs/sdks/project/README.md#deletecheckoutkey) - Delete a checkout key
* [deleteEnvVar](docs/sdks/project/README.md#deleteenvvar) - Delete an environment variable
* [getCheckoutKey](docs/sdks/project/README.md#getcheckoutkey) - Get a checkout key
* [getEnvVar](docs/sdks/project/README.md#getenvvar) - Get a masked environment variable
* [getProjectBySlug](docs/sdks/project/README.md#getprojectbyslug) - Get a project
* [listCheckoutKeys](docs/sdks/project/README.md#listcheckoutkeys) - Get all checkout keys
* [listEnvVars](docs/sdks/project/README.md#listenvvars) - List all environment variables

### [schedule](docs/sdks/schedule/README.md)

* [createSchedule](docs/sdks/schedule/README.md#createschedule) - Create a schedule
* [deleteScheduleById](docs/sdks/schedule/README.md#deleteschedulebyid) - Delete a schedule
* [getScheduleById](docs/sdks/schedule/README.md#getschedulebyid) - Get a schedule
* [listSchedulesForProject](docs/sdks/schedule/README.md#listschedulesforproject) - Get all schedules
* [updateSchedule](docs/sdks/schedule/README.md#updateschedule) - Update a schedule

### [user](docs/sdks/user/README.md)

* [getCollaborations](docs/sdks/user/README.md#getcollaborations) - Collaborations
* [getCurrentUser](docs/sdks/user/README.md#getcurrentuser) - User Information
* [getUser](docs/sdks/user/README.md#getuser) - User Information

### [webhook](docs/sdks/webhook/README.md)

* [createWebhook](docs/sdks/webhook/README.md#createwebhook) - Create a webhook
* [deleteWebhook](docs/sdks/webhook/README.md#deletewebhook) - Delete a webhook
* [getWebhookById](docs/sdks/webhook/README.md#getwebhookbyid) - Get a webhook
* [getWebhooks](docs/sdks/webhook/README.md#getwebhooks) - List webhooks
* [updateWebhook](docs/sdks/webhook/README.md#updatewebhook) - Update a webhook

### [workflow](docs/sdks/workflow/README.md)

* [approvePendingApprovalJobById](docs/sdks/workflow/README.md#approvependingapprovaljobbyid) - Approve a job
* [cancelWorkflow](docs/sdks/workflow/README.md#cancelworkflow) - Cancel a workflow
* [getWorkflowById](docs/sdks/workflow/README.md#getworkflowbyid) - Get a workflow
* [listWorkflowJobs](docs/sdks/workflow/README.md#listworkflowjobs) - Get a workflow's jobs
* [rerunWorkflow](docs/sdks/workflow/README.md#rerunworkflow) - Rerun a workflow
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
