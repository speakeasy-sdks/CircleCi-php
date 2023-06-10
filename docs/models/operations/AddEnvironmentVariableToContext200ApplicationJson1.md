# AddEnvironmentVariableToContext200ApplicationJSON1


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `contextId`                                                   | *string*                                                      | :heavy_check_mark:                                            | ID of the context (UUID)                                      |                                                               |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | The date and time the environment variable was created.       | 2015-09-21T17:29:21.042Z                                      |
| `updatedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | The date and time the environment variable was updated        | 2015-09-21T17:29:21.042Z                                      |
| `variable`                                                    | *string*                                                      | :heavy_check_mark:                                            | The name of the environment variable                          | POSTGRES_USER                                                 |