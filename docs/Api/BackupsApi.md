# HostAfrica\SDK\BackupsApi

Create and restore on-demand backups of your VPS instances and configure automated backup schedules to protect your data.

All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBackup()**](BackupsApi.md#createBackup) | **POST** /vps/create-backup |  |
| [**createBackupSchedule()**](BackupsApi.md#createBackupSchedule) | **POST** /vps/create-backup-schedule |  |
| [**deleteBackup()**](BackupsApi.md#deleteBackup) | **POST** /vps/delete-backup |  |
| [**deleteBackupSchedule()**](BackupsApi.md#deleteBackupSchedule) | **POST** /vps/delete-backup-schedule |  |
| [**editBackupSchedule()**](BackupsApi.md#editBackupSchedule) | **POST** /vps/edit-backup-schedule |  |
| [**listBackupSchedules()**](BackupsApi.md#listBackupSchedules) | **POST** /vps/list-backup-schedules |  |
| [**listBackups()**](BackupsApi.md#listBackups) | **POST** /vps/list-backups |  |
| [**restoreBackup()**](BackupsApi.md#restoreBackup) | **POST** /vps/restore-backup |  |


## `createBackup()`

```php
createBackup($create_backup_request_content): \HostAfrica\SDK\Model\CreateBackupResponseContent
```



Creates a new backup for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_backup_request_content = new \HostAfrica\SDK\Model\CreateBackupRequestContent(); // \HostAfrica\SDK\Model\CreateBackupRequestContent

try {
    $result = $apiInstance->createBackup($create_backup_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->createBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_backup_request_content** | [**\HostAfrica\SDK\Model\CreateBackupRequestContent**](../Model/CreateBackupRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\CreateBackupResponseContent**](../Model/CreateBackupResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBackupSchedule()`

```php
createBackupSchedule($create_backup_schedule_request_content): \HostAfrica\SDK\Model\CreateBackupScheduleResponseContent
```



Creates a new backup schedule for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_backup_schedule_request_content = new \HostAfrica\SDK\Model\CreateBackupScheduleRequestContent(); // \HostAfrica\SDK\Model\CreateBackupScheduleRequestContent

try {
    $result = $apiInstance->createBackupSchedule($create_backup_schedule_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->createBackupSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_backup_schedule_request_content** | [**\HostAfrica\SDK\Model\CreateBackupScheduleRequestContent**](../Model/CreateBackupScheduleRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\CreateBackupScheduleResponseContent**](../Model/CreateBackupScheduleResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBackup()`

```php
deleteBackup($delete_backup_request_content): \HostAfrica\SDK\Model\DeleteBackupResponseContent
```



Deletes a specific backup from a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_backup_request_content = new \HostAfrica\SDK\Model\DeleteBackupRequestContent(); // \HostAfrica\SDK\Model\DeleteBackupRequestContent

try {
    $result = $apiInstance->deleteBackup($delete_backup_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->deleteBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_backup_request_content** | [**\HostAfrica\SDK\Model\DeleteBackupRequestContent**](../Model/DeleteBackupRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\DeleteBackupResponseContent**](../Model/DeleteBackupResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBackupSchedule()`

```php
deleteBackupSchedule($delete_backup_schedule_request_content): \HostAfrica\SDK\Model\DeleteBackupScheduleResponseContent
```



Deletes a backup schedule from a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_backup_schedule_request_content = new \HostAfrica\SDK\Model\DeleteBackupScheduleRequestContent(); // \HostAfrica\SDK\Model\DeleteBackupScheduleRequestContent

try {
    $result = $apiInstance->deleteBackupSchedule($delete_backup_schedule_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->deleteBackupSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_backup_schedule_request_content** | [**\HostAfrica\SDK\Model\DeleteBackupScheduleRequestContent**](../Model/DeleteBackupScheduleRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\DeleteBackupScheduleResponseContent**](../Model/DeleteBackupScheduleResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editBackupSchedule()`

```php
editBackupSchedule($edit_backup_schedule_request_content): \HostAfrica\SDK\Model\EditBackupScheduleResponseContent
```



Edits an existing backup schedule for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edit_backup_schedule_request_content = new \HostAfrica\SDK\Model\EditBackupScheduleRequestContent(); // \HostAfrica\SDK\Model\EditBackupScheduleRequestContent

try {
    $result = $apiInstance->editBackupSchedule($edit_backup_schedule_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->editBackupSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edit_backup_schedule_request_content** | [**\HostAfrica\SDK\Model\EditBackupScheduleRequestContent**](../Model/EditBackupScheduleRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\EditBackupScheduleResponseContent**](../Model/EditBackupScheduleResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBackupSchedules()`

```php
listBackupSchedules($list_backup_schedules_request_content): \HostAfrica\SDK\Model\ListBackupSchedulesResponseContent
```



Retrieves the list of backup schedules for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_backup_schedules_request_content = new \HostAfrica\SDK\Model\ListBackupSchedulesRequestContent(); // \HostAfrica\SDK\Model\ListBackupSchedulesRequestContent

try {
    $result = $apiInstance->listBackupSchedules($list_backup_schedules_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->listBackupSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_backup_schedules_request_content** | [**\HostAfrica\SDK\Model\ListBackupSchedulesRequestContent**](../Model/ListBackupSchedulesRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ListBackupSchedulesResponseContent**](../Model/ListBackupSchedulesResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBackups()`

```php
listBackups($list_backups_request_content): \HostAfrica\SDK\Model\ListBackupsResponseContent
```



Retrieves the list of backups for a VPS service including quota information and backup configuration options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_backups_request_content = new \HostAfrica\SDK\Model\ListBackupsRequestContent(); // \HostAfrica\SDK\Model\ListBackupsRequestContent

try {
    $result = $apiInstance->listBackups($list_backups_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->listBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_backups_request_content** | [**\HostAfrica\SDK\Model\ListBackupsRequestContent**](../Model/ListBackupsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ListBackupsResponseContent**](../Model/ListBackupsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreBackup()`

```php
restoreBackup($restore_backup_request_content): \HostAfrica\SDK\Model\RestoreBackupResponseContent
```



Restores a VPS from a backup with the specified backup identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$restore_backup_request_content = new \HostAfrica\SDK\Model\RestoreBackupRequestContent(); // \HostAfrica\SDK\Model\RestoreBackupRequestContent

try {
    $result = $apiInstance->restoreBackup($restore_backup_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->restoreBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **restore_backup_request_content** | [**\HostAfrica\SDK\Model\RestoreBackupRequestContent**](../Model/RestoreBackupRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\RestoreBackupResponseContent**](../Model/RestoreBackupResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
