# HostAfrica\SDK\PowerManagementApi



All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPowerTask()**](PowerManagementApi.md#createPowerTask) | **POST** /vps/create-power-task |  |
| [**deletePowerTask()**](PowerManagementApi.md#deletePowerTask) | **POST** /vps/delete-power-task |  |
| [**listPowerTasks()**](PowerManagementApi.md#listPowerTasks) | **POST** /vps/list-power-tasks |  |
| [**rebootVps()**](PowerManagementApi.md#rebootVps) | **POST** /vps/reboot |  |
| [**shutdownVps()**](PowerManagementApi.md#shutdownVps) | **POST** /vps/shutdown |  |
| [**startVps()**](PowerManagementApi.md#startVps) | **POST** /vps/start |  |
| [**stopVps()**](PowerManagementApi.md#stopVps) | **POST** /vps/stop |  |
| [**updatePowerTask()**](PowerManagementApi.md#updatePowerTask) | **POST** /vps/update-power-task |  |


## `createPowerTask()`

```php
createPowerTask($create_power_task_request_content): \HostAfrica\SDK\Model\CreatePowerTaskResponseContent
```



Creates a new power task (scheduled start/stop/restart operation) for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\PowerManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_power_task_request_content = new \HostAfrica\SDK\Model\CreatePowerTaskRequestContent(); // \HostAfrica\SDK\Model\CreatePowerTaskRequestContent

try {
    $result = $apiInstance->createPowerTask($create_power_task_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PowerManagementApi->createPowerTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_power_task_request_content** | [**\HostAfrica\SDK\Model\CreatePowerTaskRequestContent**](../Model/CreatePowerTaskRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\CreatePowerTaskResponseContent**](../Model/CreatePowerTaskResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePowerTask()`

```php
deletePowerTask($delete_power_task_request_content): \HostAfrica\SDK\Model\DeletePowerTaskResponseContent
```



Deletes a power task from a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\PowerManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_power_task_request_content = new \HostAfrica\SDK\Model\DeletePowerTaskRequestContent(); // \HostAfrica\SDK\Model\DeletePowerTaskRequestContent

try {
    $result = $apiInstance->deletePowerTask($delete_power_task_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PowerManagementApi->deletePowerTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_power_task_request_content** | [**\HostAfrica\SDK\Model\DeletePowerTaskRequestContent**](../Model/DeletePowerTaskRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\DeletePowerTaskResponseContent**](../Model/DeletePowerTaskResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPowerTasks()`

```php
listPowerTasks($list_power_tasks_request_content): \HostAfrica\SDK\Model\ListPowerTasksResponseContent
```



Retrieves the list of power tasks (scheduled start/stop/restart operations) for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\PowerManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_power_tasks_request_content = new \HostAfrica\SDK\Model\ListPowerTasksRequestContent(); // \HostAfrica\SDK\Model\ListPowerTasksRequestContent

try {
    $result = $apiInstance->listPowerTasks($list_power_tasks_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PowerManagementApi->listPowerTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_power_tasks_request_content** | [**\HostAfrica\SDK\Model\ListPowerTasksRequestContent**](../Model/ListPowerTasksRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ListPowerTasksResponseContent**](../Model/ListPowerTasksResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rebootVps()`

```php
rebootVps($reboot_vps_request_content): \HostAfrica\SDK\Model\RebootVpsResponseContent
```



Gracefully reboot a VPS service. Sends ACPI reboot signal to guest OS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\PowerManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reboot_vps_request_content = new \HostAfrica\SDK\Model\RebootVpsRequestContent(); // \HostAfrica\SDK\Model\RebootVpsRequestContent

try {
    $result = $apiInstance->rebootVps($reboot_vps_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PowerManagementApi->rebootVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reboot_vps_request_content** | [**\HostAfrica\SDK\Model\RebootVpsRequestContent**](../Model/RebootVpsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\RebootVpsResponseContent**](../Model/RebootVpsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shutdownVps()`

```php
shutdownVps($shutdown_vps_request_content): \HostAfrica\SDK\Model\ShutdownVpsResponseContent
```



Gracefully shutdown a VPS service. Sends ACPI shutdown signal to guest OS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\PowerManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shutdown_vps_request_content = new \HostAfrica\SDK\Model\ShutdownVpsRequestContent(); // \HostAfrica\SDK\Model\ShutdownVpsRequestContent

try {
    $result = $apiInstance->shutdownVps($shutdown_vps_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PowerManagementApi->shutdownVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shutdown_vps_request_content** | [**\HostAfrica\SDK\Model\ShutdownVpsRequestContent**](../Model/ShutdownVpsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ShutdownVpsResponseContent**](../Model/ShutdownVpsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startVps()`

```php
startVps($start_vps_request_content): \HostAfrica\SDK\Model\StartVpsResponseContent
```



Starts a stopped VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\PowerManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_vps_request_content = new \HostAfrica\SDK\Model\StartVpsRequestContent(); // \HostAfrica\SDK\Model\StartVpsRequestContent

try {
    $result = $apiInstance->startVps($start_vps_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PowerManagementApi->startVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_vps_request_content** | [**\HostAfrica\SDK\Model\StartVpsRequestContent**](../Model/StartVpsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\StartVpsResponseContent**](../Model/StartVpsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopVps()`

```php
stopVps($stop_vps_request_content): \HostAfrica\SDK\Model\StopVpsResponseContent
```



Hard stops a running VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\PowerManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stop_vps_request_content = new \HostAfrica\SDK\Model\StopVpsRequestContent(); // \HostAfrica\SDK\Model\StopVpsRequestContent

try {
    $result = $apiInstance->stopVps($stop_vps_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PowerManagementApi->stopVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stop_vps_request_content** | [**\HostAfrica\SDK\Model\StopVpsRequestContent**](../Model/StopVpsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\StopVpsResponseContent**](../Model/StopVpsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePowerTask()`

```php
updatePowerTask($update_power_task_request_content): \HostAfrica\SDK\Model\UpdatePowerTaskResponseContent
```



Updates an existing power task (scheduled start/stop/restart operation) for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\PowerManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_power_task_request_content = new \HostAfrica\SDK\Model\UpdatePowerTaskRequestContent(); // \HostAfrica\SDK\Model\UpdatePowerTaskRequestContent

try {
    $result = $apiInstance->updatePowerTask($update_power_task_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PowerManagementApi->updatePowerTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_power_task_request_content** | [**\HostAfrica\SDK\Model\UpdatePowerTaskRequestContent**](../Model/UpdatePowerTaskRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\UpdatePowerTaskResponseContent**](../Model/UpdatePowerTaskResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
