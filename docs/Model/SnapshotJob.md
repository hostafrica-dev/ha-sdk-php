# # SnapshotJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Snapshot job ID |
**hosting_id** | **int** | Hosting account ID | [optional]
**vm_id** | **int** | VM ID (null if not yet assigned) | [optional]
**name** | **string** | Name of the snapshot job |
**description** | **string** | Description of the snapshot job | [optional]
**vmstate** | **bool** | Whether VM state is included in the snapshot | [optional]
**period** | [**\HostAfrica\SDK\Model\SnapshotJobPeriod**](SnapshotJobPeriod.md) |  |
**run_every** | **int** | For hourly jobs: run every N hours | [optional]
**days** | [**\HostAfrica\SDK\Model\DayOfWeek[]**](DayOfWeek.md) | For daily jobs: days of week | [optional]
**start_time** | **string** | For daily jobs: start time in HH:MM format | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
