# GetProjectWorkflowsPageData200ApplicationJSONProjectWorkflowBranchDataMetrics

Metrics aggregated across a workflow or branchfor a project.


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `p95DurationSecs`                                                | *float*                                                          | :heavy_check_mark:                                               | The 95th percentile duration among a group of workflow runs.     |
| `successRate`                                                    | *float*                                                          | :heavy_check_mark:                                               | N/A                                                              |
| `totalCreditsUsed`                                               | *int*                                                            | :heavy_check_mark:                                               | The total credits consumed over the current timeseries interval. |
| `totalRuns`                                                      | *int*                                                            | :heavy_check_mark:                                               | The total number of runs.                                        |