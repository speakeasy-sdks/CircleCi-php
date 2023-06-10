# GetProjectWorkflowsPageData200ApplicationJSONProjectDataTrends

Metric trends aggregated across all workflows and branches for a project.


## Fields

| Field                                               | Type                                                | Required                                            | Description                                         |
| --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- |
| `successRate`                                       | *float*                                             | :heavy_check_mark:                                  | The trend value for the success rate.               |
| `throughput`                                        | *float*                                             | :heavy_check_mark:                                  | Trend value for the average number of runs per day. |
| `totalCreditsUsed`                                  | *float*                                             | :heavy_check_mark:                                  | The trend value for total credits consumed.         |
| `totalDurationSecs`                                 | *float*                                             | :heavy_check_mark:                                  | Trend value for total duration.                     |
| `totalRuns`                                         | *float*                                             | :heavy_check_mark:                                  | The trend value for total number of runs.           |