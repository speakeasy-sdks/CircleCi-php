# GetOrgSummaryData200ApplicationJSONOrgDataMetrics

Metrics for a single org metrics.


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `successRate`                                                    | *float*                                                          | :heavy_check_mark:                                               | N/A                                                              |
| `throughput`                                                     | *float*                                                          | :heavy_check_mark:                                               | The average number of runs per day.                              |
| `totalCreditsUsed`                                               | *int*                                                            | :heavy_check_mark:                                               | The total credits consumed over the current timeseries interval. |
| `totalDurationSecs`                                              | *int*                                                            | :heavy_check_mark:                                               | Total duration, in seconds.                                      |
| `totalRuns`                                                      | *int*                                                            | :heavy_check_mark:                                               | The total number of runs.                                        |