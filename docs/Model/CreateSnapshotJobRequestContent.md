# # CreateSnapshotJobRequestContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Service ID - must be sent as a string |
**name** | **string** | Name for the snapshot job (e.g. &#39;auto_hourly&#39;) |
**description** | **string** | Description for the snapshot job | [optional]
**vmstate** | **bool** | Whether to include VM state in the snapshot | [optional]
**period** | [**\HostAfrica\SDK\Model\SnapshotJobPeriod**](SnapshotJobPeriod.md) |  |
**run_every** | **int** | For hourly jobs: run every N hours (e.g. 6 &#x3D; every 6 hours) | [optional]
**days** | [**\HostAfrica\SDK\Model\DayOfWeek[]**](DayOfWeek.md) | For daily jobs: days of week when the job should run | [optional]
**start_time** | **string** | For daily jobs: start time in HH:MM format (e.g. &#39;02:30&#39;) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
