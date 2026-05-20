# HostAfrica\SDK\SecurityApi

Manage OS-level credentials and SSH key access for your VPS instances, including password changes and SSH key rotation.

All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changePassword()**](SecurityApi.md#changePassword) | **POST** /vps/change-password |  |
| [**getPrivateSshKey()**](SecurityApi.md#getPrivateSshKey) | **POST** /vps/get-private-ssh-keys |  |
| [**getPublicSshKey()**](SecurityApi.md#getPublicSshKey) | **POST** /vps/get-public-ssh-keys |  |
| [**updateSshKeys()**](SecurityApi.md#updateSshKeys) | **POST** /vps/update-ssh-keys |  |


## `changePassword()`

```php
changePassword($change_password_request_content): \HostAfrica\SDK\Model\ChangePasswordResponseContent
```



Change the root password for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_password_request_content = new \HostAfrica\SDK\Model\ChangePasswordRequestContent(); // \HostAfrica\SDK\Model\ChangePasswordRequestContent

try {
    $result = $apiInstance->changePassword($change_password_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->changePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_password_request_content** | [**\HostAfrica\SDK\Model\ChangePasswordRequestContent**](../Model/ChangePasswordRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ChangePasswordResponseContent**](../Model/ChangePasswordResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrivateSshKey()`

```php
getPrivateSshKey($get_private_ssh_key_request_content): \HostAfrica\SDK\Model\GetPrivateSshKeyResponseContent
```



Retrieves the private SSH key configured for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_private_ssh_key_request_content = new \HostAfrica\SDK\Model\GetPrivateSshKeyRequestContent(); // \HostAfrica\SDK\Model\GetPrivateSshKeyRequestContent

try {
    $result = $apiInstance->getPrivateSshKey($get_private_ssh_key_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getPrivateSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_private_ssh_key_request_content** | [**\HostAfrica\SDK\Model\GetPrivateSshKeyRequestContent**](../Model/GetPrivateSshKeyRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\GetPrivateSshKeyResponseContent**](../Model/GetPrivateSshKeyResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicSshKey()`

```php
getPublicSshKey($get_public_ssh_key_request_content): \HostAfrica\SDK\Model\GetPublicSshKeyResponseContent
```



Retrieves the public SSH key configured for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_public_ssh_key_request_content = new \HostAfrica\SDK\Model\GetPublicSshKeyRequestContent(); // \HostAfrica\SDK\Model\GetPublicSshKeyRequestContent

try {
    $result = $apiInstance->getPublicSshKey($get_public_ssh_key_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getPublicSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_public_ssh_key_request_content** | [**\HostAfrica\SDK\Model\GetPublicSshKeyRequestContent**](../Model/GetPublicSshKeyRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\GetPublicSshKeyResponseContent**](../Model/GetPublicSshKeyResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSshKeys()`

```php
updateSshKeys($update_ssh_keys_request_content): \HostAfrica\SDK\Model\UpdateSshKeysResponseContent
```



Updates SSH public keys for a VPS service for root access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_ssh_keys_request_content = new \HostAfrica\SDK\Model\UpdateSshKeysRequestContent(); // \HostAfrica\SDK\Model\UpdateSshKeysRequestContent

try {
    $result = $apiInstance->updateSshKeys($update_ssh_keys_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->updateSshKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_ssh_keys_request_content** | [**\HostAfrica\SDK\Model\UpdateSshKeysRequestContent**](../Model/UpdateSshKeysRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\UpdateSshKeysResponseContent**](../Model/UpdateSshKeysResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
