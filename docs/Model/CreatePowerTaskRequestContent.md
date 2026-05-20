# # CreatePowerTaskRequestContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Service ID - must be sent as a string |
**power_task_action** | [**\HostAfrica\SDK\Model\PowerTaskAction**](PowerTaskAction.md) |  |
**start_date** | **string** | Start date in Y-m-d format (e.g., 2026-03-25) |
**description** | **string** | Description of the power task | [optional]
**start_time** | **string** | Start time in HH:MM or HH:MM:SS format | [optional]
**end_date** | **string** | End date in Y-m-d format (e.g., 2026-12-31) | [optional]
**end_time** | **string** | End time in HH:MM or HH:MM:SS format | [optional]
**job_type** | [**\HostAfrica\SDK\Model\PowerTaskJobType**](PowerTaskJobType.md) |  | [optional]
**job_time** | **string** | Job execution time in HH:MM or HH:MM:SS format | [optional]
**job_hour** | **int** | Job hour (alternative to job_time) | [optional]
**job_minutes** | **int** | Job minutes (alternative to job_time) | [optional]
**days** | [**\HostAfrica\SDK\Model\DayOfWeek[]**](DayOfWeek.md) | Days of the week for weekly jobs | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
