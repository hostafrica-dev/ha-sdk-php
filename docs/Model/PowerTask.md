# # PowerTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Task ID |
**hosting_id** | **int** | Hosting/service ID |
**description** | **string** | Task description | [optional]
**action** | **string** | Power action (start, stop, restart) |
**start** | **string** | Task start date/time (ISO 8601 format) |
**end** | **string** | Task end date/time (ISO 8601 format, null if no end) | [optional]
**job_type** | **string** | Job type (oneTime, daily, weekly) |
**job_time** | **string** | Job execution time (HH:MM:SS format) |
**days** | **string[]** | Days of week for weekly jobs (empty array for oneTime/daily) |
**last_run** | **string** | Last run timestamp (null if never run) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
