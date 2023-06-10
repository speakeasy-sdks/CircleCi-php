# GetProjectWorkflowMetrics200ApplicationJSONItemsMetricsDurationMetrics

Metrics relating to the duration of runs for a workflow.


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `max`                                                            | *int*                                                            | :heavy_check_mark:                                               | The max duration, in seconds, among a group of runs.             |
| `mean`                                                           | *int*                                                            | :heavy_check_mark:                                               | The mean duration, in seconds, among a group of runs.            |
| `median`                                                         | *int*                                                            | :heavy_check_mark:                                               | The median duration, in seconds, among a group of runs.          |
| `min`                                                            | *int*                                                            | :heavy_check_mark:                                               | The minimum duration, in seconds, among a group of runs.         |
| `p95`                                                            | *int*                                                            | :heavy_check_mark:                                               | The 95th percentile duration, in seconds, among a group of runs. |
| `standardDeviation`                                              | *float*                                                          | :heavy_check_mark:                                               | The standard deviation, in seconds, among a group of runs.       |