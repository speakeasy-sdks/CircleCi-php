<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


enum UpdateWebhookRequestBodyEventsEnum: string
{
    case WORKFLOW_COMPLETED = 'workflow-completed';
    case JOB_COMPLETED = 'job-completed';
}
