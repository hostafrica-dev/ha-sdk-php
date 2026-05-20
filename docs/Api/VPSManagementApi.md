# HostAfrica\SDK\VPSManagementApi



All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getVpsConfig()**](VPSManagementApi.md#getVpsConfig) | **POST** /vps/get-config |  |
| [**getVpsDetails()**](VPSManagementApi.md#getVpsDetails) | **POST** /vps/get-details |  |
| [**listIsos()**](VPSManagementApi.md#listIsos) | **POST** /vps/list-isos |  |
| [**listReinstallOs()**](VPSManagementApi.md#listReinstallOs) | **POST** /vps/list-reinstall-images |  |
| [**listVpsServices()**](VPSManagementApi.md#listVpsServices) | **POST** /vps/list-vps-services |  |
| [**mountIso()**](VPSManagementApi.md#mountIso) | **POST** /vps/mount-iso |  |
| [**triggerReinstall()**](VPSManagementApi.md#triggerReinstall) | **POST** /vps/trigger-reinstall |  |
| [**updateVpsConfig()**](VPSManagementApi.md#updateVpsConfig) | **POST** /vps/update-config |  |


## `getVpsConfig()`

```php
getVpsConfig($get_vps_config_request_content): \HostAfrica\SDK\Model\GetVpsConfigResponseContent
```



Retrieves VPS configuration settings including name, hostname, auto-start, boot order, and CD-ROM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\VPSManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_vps_config_request_content = new \HostAfrica\SDK\Model\GetVpsConfigRequestContent(); // \HostAfrica\SDK\Model\GetVpsConfigRequestContent

try {
    $result = $apiInstance->getVpsConfig($get_vps_config_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSManagementApi->getVpsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_vps_config_request_content** | [**\HostAfrica\SDK\Model\GetVpsConfigRequestContent**](../Model/GetVpsConfigRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\GetVpsConfigResponseContent**](../Model/GetVpsConfigResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVpsDetails()`

```php
getVpsDetails($get_vps_details_request_content): \HostAfrica\SDK\Model\GetVpsDetailsResponseContent
```



Gets detailed information about a VPS service including configuration, network settings, and statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\VPSManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_vps_details_request_content = new \HostAfrica\SDK\Model\GetVpsDetailsRequestContent(); // \HostAfrica\SDK\Model\GetVpsDetailsRequestContent

try {
    $result = $apiInstance->getVpsDetails($get_vps_details_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSManagementApi->getVpsDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_vps_details_request_content** | [**\HostAfrica\SDK\Model\GetVpsDetailsRequestContent**](../Model/GetVpsDetailsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\GetVpsDetailsResponseContent**](../Model/GetVpsDetailsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIsos()`

```php
listIsos($list_isos_request_content): \HostAfrica\SDK\Model\ListIsosResponseContent
```



Retrieves the list of available ISO images for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\VPSManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_isos_request_content = new \HostAfrica\SDK\Model\ListIsosRequestContent(); // \HostAfrica\SDK\Model\ListIsosRequestContent

try {
    $result = $apiInstance->listIsos($list_isos_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSManagementApi->listIsos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_isos_request_content** | [**\HostAfrica\SDK\Model\ListIsosRequestContent**](../Model/ListIsosRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ListIsosResponseContent**](../Model/ListIsosResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReinstallOs()`

```php
listReinstallOs($list_reinstall_os_request_content): \HostAfrica\SDK\Model\ListReinstallOsResponseContent
```



[Under development] Retrieves the list of available OS images for VPS reinstallation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\VPSManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_reinstall_os_request_content = new \HostAfrica\SDK\Model\ListReinstallOsRequestContent(); // \HostAfrica\SDK\Model\ListReinstallOsRequestContent

try {
    $result = $apiInstance->listReinstallOs($list_reinstall_os_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSManagementApi->listReinstallOs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_reinstall_os_request_content** | [**\HostAfrica\SDK\Model\ListReinstallOsRequestContent**](../Model/ListReinstallOsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ListReinstallOsResponseContent**](../Model/ListReinstallOsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVpsServices()`

```php
listVpsServices(): \HostAfrica\SDK\Model\ListVpsServicesResponseContent
```



Lists all VPS services accessible by the authenticated user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\VPSManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVpsServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSManagementApi->listVpsServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\HostAfrica\SDK\Model\ListVpsServicesResponseContent**](../Model/ListVpsServicesResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mountIso()`

```php
mountIso($mount_iso_request_content): \HostAfrica\SDK\Model\MountIsoResponseContent
```



Mounts an ISO image on a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\VPSManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount_iso_request_content = new \HostAfrica\SDK\Model\MountIsoRequestContent(); // \HostAfrica\SDK\Model\MountIsoRequestContent

try {
    $result = $apiInstance->mountIso($mount_iso_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSManagementApi->mountIso: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount_iso_request_content** | [**\HostAfrica\SDK\Model\MountIsoRequestContent**](../Model/MountIsoRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\MountIsoResponseContent**](../Model/MountIsoResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerReinstall()`

```php
triggerReinstall($trigger_reinstall_request_content): \HostAfrica\SDK\Model\TriggerReinstallResponseContent
```



Triggers a VPS reinstallation with the specified OS template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\VPSManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trigger_reinstall_request_content = new \HostAfrica\SDK\Model\TriggerReinstallRequestContent(); // \HostAfrica\SDK\Model\TriggerReinstallRequestContent

try {
    $result = $apiInstance->triggerReinstall($trigger_reinstall_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSManagementApi->triggerReinstall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trigger_reinstall_request_content** | [**\HostAfrica\SDK\Model\TriggerReinstallRequestContent**](../Model/TriggerReinstallRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\TriggerReinstallResponseContent**](../Model/TriggerReinstallResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVpsConfig()`

```php
updateVpsConfig($update_vps_config_request_content): \HostAfrica\SDK\Model\UpdateVpsConfigResponseContent
```



Updates VPS configuration settings such as name, hostname, auto-start, boot order, and CD-ROM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\VPSManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_vps_config_request_content = new \HostAfrica\SDK\Model\UpdateVpsConfigRequestContent(); // \HostAfrica\SDK\Model\UpdateVpsConfigRequestContent

try {
    $result = $apiInstance->updateVpsConfig($update_vps_config_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSManagementApi->updateVpsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_vps_config_request_content** | [**\HostAfrica\SDK\Model\UpdateVpsConfigRequestContent**](../Model/UpdateVpsConfigRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\UpdateVpsConfigResponseContent**](../Model/UpdateVpsConfigResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
