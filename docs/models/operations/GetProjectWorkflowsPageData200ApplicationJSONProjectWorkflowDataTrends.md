# GetProjectWorkflowsPageData200ApplicationJSONProjectWorkflowDataTrends

Trends aggregated across a workflow or branch for a project.


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `p95DurationSecs`                                            | *float*                                                      | :heavy_check_mark:                                           | The 95th percentile duration among a group of workflow runs. |
| `successRate`                                                | *float*                                                      | :heavy_check_mark:                                           | The trend value for the success rate.                        |
| `totalCreditsUsed`                                           | *float*                                                      | :heavy_check_mark:                                           | The trend value for total credits consumed.                  |
| `totalRuns`                                                  | *float*                                                      | :heavy_check_mark:                                           | The trend value for total number of runs.                    |