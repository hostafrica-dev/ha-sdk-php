# HostAfrica\SDK\ConsoleAccessApi



All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNoVncConsole()**](ConsoleAccessApi.md#getNoVncConsole) | **POST** /vps/novnc-console |  |


## `getNoVncConsole()`

```php
getNoVncConsole($get_no_vnc_console_request_content): \HostAfrica\SDK\Model\GetNoVncConsoleResponseContent
```



Retrieves noVNC console access credentials and connection details for a VPS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\ConsoleAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_no_vnc_console_request_content = new \HostAfrica\SDK\Model\GetNoVncConsoleRequestContent(); // \HostAfrica\SDK\Model\GetNoVncConsoleRequestContent

try {
    $result = $apiInstance->getNoVncConsole($get_no_vnc_console_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsoleAccessApi->getNoVncConsole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_no_vnc_console_request_content** | [**\HostAfrica\SDK\Model\GetNoVncConsoleRequestContent**](../Model/GetNoVncConsoleRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\GetNoVncConsoleResponseContent**](../Model/GetNoVncConsoleResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
