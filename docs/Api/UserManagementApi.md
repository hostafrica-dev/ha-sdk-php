# HostAfrica\SDK\UserManagementApi



All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userChangePassword()**](UserManagementApi.md#userChangePassword) | **POST** /user/change-password |  |


## `userChangePassword()`

```php
userChangePassword($user_change_password_request_content): \HostAfrica\SDK\Model\UserChangePasswordResponseContent
```



Changes the authenticated user's password. All active sessions will be revoked and the user must login again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_change_password_request_content = new \HostAfrica\SDK\Model\UserChangePasswordRequestContent(); // \HostAfrica\SDK\Model\UserChangePasswordRequestContent

try {
    $result = $apiInstance->userChangePassword($user_change_password_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userChangePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_change_password_request_content** | [**\HostAfrica\SDK\Model\UserChangePasswordRequestContent**](../Model/UserChangePasswordRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\UserChangePasswordResponseContent**](../Model/UserChangePasswordResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
