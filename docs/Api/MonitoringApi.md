# HostAfrica\SDK\MonitoringApi

Configure notification triggers on resource metrics such as CPU, memory, and disk usage to receive alerts when thresholds are breached.

All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNotification()**](MonitoringApi.md#createNotification) | **POST** /vps/create-notification |  |
| [**deleteNotification()**](MonitoringApi.md#deleteNotification) | **POST** /vps/delete-notification |  |
| [**listNotifications()**](MonitoringApi.md#listNotifications) | **POST** /vps/list-notifications |  |
| [**updateNotification()**](MonitoringApi.md#updateNotification) | **POST** /vps/update-notification |  |


## `createNotification()`

```php
createNotification($create_notification_request_content): \HostAfrica\SDK\Model\CreateNotificationResponseContent
```



Creates a new notification for a VPS service with customizable thresholds for CPU, memory, network, and disk metrics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_notification_request_content = new \HostAfrica\SDK\Model\CreateNotificationRequestContent(); // \HostAfrica\SDK\Model\CreateNotificationRequestContent

try {
    $result = $apiInstance->createNotification($create_notification_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->createNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_notification_request_content** | [**\HostAfrica\SDK\Model\CreateNotificationRequestContent**](../Model/CreateNotificationRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\CreateNotificationResponseContent**](../Model/CreateNotificationResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNotification()`

```php
deleteNotification($delete_notification_request_content): \HostAfrica\SDK\Model\DeleteNotificationResponseContent
```



Deletes a notification from a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_notification_request_content = new \HostAfrica\SDK\Model\DeleteNotificationRequestContent(); // \HostAfrica\SDK\Model\DeleteNotificationRequestContent

try {
    $result = $apiInstance->deleteNotification($delete_notification_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->deleteNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_notification_request_content** | [**\HostAfrica\SDK\Model\DeleteNotificationRequestContent**](../Model/DeleteNotificationRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\DeleteNotificationResponseContent**](../Model/DeleteNotificationResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNotifications()`

```php
listNotifications($list_notifications_request_content): \HostAfrica\SDK\Model\ListNotificationsResponseContent
```



Retrieves the list of notifications for a VPS service along with dialog rules for creating notifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_notifications_request_content = new \HostAfrica\SDK\Model\ListNotificationsRequestContent(); // \HostAfrica\SDK\Model\ListNotificationsRequestContent

try {
    $result = $apiInstance->listNotifications($list_notifications_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->listNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_notifications_request_content** | [**\HostAfrica\SDK\Model\ListNotificationsRequestContent**](../Model/ListNotificationsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ListNotificationsResponseContent**](../Model/ListNotificationsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNotification()`

```php
updateNotification($update_notification_request_content): \HostAfrica\SDK\Model\UpdateNotificationResponseContent
```



Updates an existing notification for a VPS service with customizable thresholds for CPU, memory, network, and disk metrics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_notification_request_content = new \HostAfrica\SDK\Model\UpdateNotificationRequestContent(); // \HostAfrica\SDK\Model\UpdateNotificationRequestContent

try {
    $result = $apiInstance->updateNotification($update_notification_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->updateNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_notification_request_content** | [**\HostAfrica\SDK\Model\UpdateNotificationRequestContent**](../Model/UpdateNotificationRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\UpdateNotificationResponseContent**](../Model/UpdateNotificationResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
