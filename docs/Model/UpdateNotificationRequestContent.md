# # UpdateNotificationRequestContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Service ID - must be sent as a string |
**notification_id** | **int** | Notification ID to update |
**name** | **string** | Name/title for the notification | [optional]
**status** | [**\HostAfrica\SDK\Model\NotificationStatus**](NotificationStatus.md) |  | [optional]
**notification_interval** | **int** | Notification interval in minutes (must be &gt; 0) | [optional]
**data_timeframe** | **int** | Data timeframe in minutes (must be &gt; 0) | [optional]
**exceed_all** | **bool** | Whether all thresholds must be exceeded (true) or any one (false) | [optional]
**email_address** | **string[]** | Email addresses for notifications (comma-separated string or array) | [optional]
**cpu_usage** | **int** | CPU usage threshold percentage (0-100) | [optional]
**memory_usage** | **int** | Memory usage threshold percentage (0-100) | [optional]
**network_traffic** | **int** | Network traffic threshold percentage (0-100) | [optional]
**disk_read** | **int** | Disk read threshold percentage (0-100) | [optional]
**disk_write** | **int** | Disk write threshold percentage (0-100) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
