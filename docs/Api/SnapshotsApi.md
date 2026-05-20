# HostAfrica\SDK\SnapshotsApi

Capture point-in-time snapshots of a VPS disk, update snapshot metadata, roll back to a previous snapshot, and delete snapshots you no longer need.

All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSnapshot()**](SnapshotsApi.md#createSnapshot) | **POST** /vps/create-snapshot |  |
| [**deleteSnapshot()**](SnapshotsApi.md#deleteSnapshot) | **POST** /vps/delete-snapshot |  |
| [**listSnapshots()**](SnapshotsApi.md#listSnapshots) | **POST** /vps/list-snapshots |  |
| [**rollbackSnapshot()**](SnapshotsApi.md#rollbackSnapshot) | **POST** /vps/rollback-snapshot |  |
| [**updateSnapshot()**](SnapshotsApi.md#updateSnapshot) | **POST** /vps/update-snapshot |  |


## `createSnapshot()`

```php
createSnapshot($create_snapshot_request_content): \HostAfrica\SDK\Model\CreateSnapshotResponseContent
```



Creates a new snapshot for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\SnapshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_snapshot_request_content = new \HostAfrica\SDK\Model\CreateSnapshotRequestContent(); // \HostAfrica\SDK\Model\CreateSnapshotRequestContent

try {
    $result = $apiInstance->createSnapshot($create_snapshot_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotsApi->createSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_snapshot_request_content** | [**\HostAfrica\SDK\Model\CreateSnapshotRequestContent**](../Model/CreateSnapshotRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\CreateSnapshotResponseContent**](../Model/CreateSnapshotResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSnapshot()`

```php
deleteSnapshot($delete_snapshot_request_content): \HostAfrica\SDK\Model\DeleteSnapshotResponseContent
```



Deletes a specific snapshot from a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\SnapshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_snapshot_request_content = new \HostAfrica\SDK\Model\DeleteSnapshotRequestContent(); // \HostAfrica\SDK\Model\DeleteSnapshotRequestContent

try {
    $result = $apiInstance->deleteSnapshot($delete_snapshot_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotsApi->deleteSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_snapshot_request_content** | [**\HostAfrica\SDK\Model\DeleteSnapshotRequestContent**](../Model/DeleteSnapshotRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\DeleteSnapshotResponseContent**](../Model/DeleteSnapshotResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSnapshots()`

```php
listSnapshots($list_snapshots_request_content): \HostAfrica\SDK\Model\ListSnapshotsResponseContent
```



Retrieves the list of snapshots for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\SnapshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_snapshots_request_content = new \HostAfrica\SDK\Model\ListSnapshotsRequestContent(); // \HostAfrica\SDK\Model\ListSnapshotsRequestContent

try {
    $result = $apiInstance->listSnapshots($list_snapshots_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotsApi->listSnapshots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_snapshots_request_content** | [**\HostAfrica\SDK\Model\ListSnapshotsRequestContent**](../Model/ListSnapshotsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ListSnapshotsResponseContent**](../Model/ListSnapshotsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rollbackSnapshot()`

```php
rollbackSnapshot($rollback_snapshot_request_content): \HostAfrica\SDK\Model\RollbackSnapshotResponseContent
```



[Under development] Rolls back a VPS to a previous snapshot state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\SnapshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rollback_snapshot_request_content = new \HostAfrica\SDK\Model\RollbackSnapshotRequestContent(); // \HostAfrica\SDK\Model\RollbackSnapshotRequestContent

try {
    $result = $apiInstance->rollbackSnapshot($rollback_snapshot_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotsApi->rollbackSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rollback_snapshot_request_content** | [**\HostAfrica\SDK\Model\RollbackSnapshotRequestContent**](../Model/RollbackSnapshotRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\RollbackSnapshotResponseContent**](../Model/RollbackSnapshotResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSnapshot()`

```php
updateSnapshot($update_snapshot_request_content): \HostAfrica\SDK\Model\UpdateSnapshotResponseContent
```



Updates a snapshot's metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\SnapshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_snapshot_request_content = new \HostAfrica\SDK\Model\UpdateSnapshotRequestContent(); // \HostAfrica\SDK\Model\UpdateSnapshotRequestContent

try {
    $result = $apiInstance->updateSnapshot($update_snapshot_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotsApi->updateSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_snapshot_request_content** | [**\HostAfrica\SDK\Model\UpdateSnapshotRequestContent**](../Model/UpdateSnapshotRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\UpdateSnapshotResponseContent**](../Model/UpdateSnapshotResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
