# # CreateBackupScheduleRequestContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Service ID - must be sent as a string |
**starttime** | **string** | Time in HH:MM format (e.g., &#39;03:00&#39;). Hours must be between 00-23, minutes must be between 00-59 |
**dow** | [**\HostAfrica\SDK\Model\DayOfWeek[]**](DayOfWeek.md) | Days of week when backup should run |
**compress** | [**\HostAfrica\SDK\Model\CompressionType**](CompressionType.md) |  |
**mode** | [**\HostAfrica\SDK\Model\BackupModeType**](BackupModeType.md) |  |
**mailto** | **bool** | Email notification setting. Set to true to send notifications to client&#39;s email, false or omit to disable | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
