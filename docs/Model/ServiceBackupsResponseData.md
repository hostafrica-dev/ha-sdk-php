# # ServiceBackupsResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Status message indicating the result |
**backups** | [**\HostAfrica\SDK\Model\BackupItem[]**](BackupItem.md) | List of backups for the service |
**quota_total** | **float** | Total backup quota (null if unlimited) | [optional]
**quota_used** | **float** | Used backup quota |
**quota_unit** | **string** | Unit for quota measurements (e.g., GiB) |
**available_compress_methods** | [**\HostAfrica\SDK\Model\CompressionMethod[]**](CompressionMethod.md) | Available compression methods for creating backups |
**available_modes** | [**\HostAfrica\SDK\Model\BackupMode[]**](BackupMode.md) | Available backup modes |
**backup_is_creating** | **bool** | Whether a backup is currently being created |
**backup_creation** | [**\HostAfrica\SDK\Model\BackupCreationInfo**](BackupCreationInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
