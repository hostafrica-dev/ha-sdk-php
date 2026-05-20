# HostAfrica\SDK\FirewallApi

Define and manage inbound and outbound firewall rules for your VPS instances, including rule ordering and priority management.

All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFirewallRule()**](FirewallApi.md#createFirewallRule) | **POST** /vps/create-firewall-rule |  |
| [**deleteFirewallRule()**](FirewallApi.md#deleteFirewallRule) | **POST** /vps/delete-firewall-rule |  |
| [**listFirewallRules()**](FirewallApi.md#listFirewallRules) | **POST** /vps/list-firewall-rules |  |
| [**moveFirewallRule()**](FirewallApi.md#moveFirewallRule) | **POST** /vps/move-firewall-rule |  |
| [**updateFirewallRule()**](FirewallApi.md#updateFirewallRule) | **POST** /vps/update-firewall-rule |  |


## `createFirewallRule()`

```php
createFirewallRule($create_firewall_rule_request_content): \HostAfrica\SDK\Model\CreateFirewallRuleResponseContent
```



Creates a new firewall rule for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_firewall_rule_request_content = new \HostAfrica\SDK\Model\CreateFirewallRuleRequestContent(); // \HostAfrica\SDK\Model\CreateFirewallRuleRequestContent

try {
    $result = $apiInstance->createFirewallRule($create_firewall_rule_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->createFirewallRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_firewall_rule_request_content** | [**\HostAfrica\SDK\Model\CreateFirewallRuleRequestContent**](../Model/CreateFirewallRuleRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\CreateFirewallRuleResponseContent**](../Model/CreateFirewallRuleResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFirewallRule()`

```php
deleteFirewallRule($delete_firewall_rule_request_content): \HostAfrica\SDK\Model\DeleteFirewallRuleResponseContent
```



Deletes a firewall rule from a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_firewall_rule_request_content = new \HostAfrica\SDK\Model\DeleteFirewallRuleRequestContent(); // \HostAfrica\SDK\Model\DeleteFirewallRuleRequestContent

try {
    $result = $apiInstance->deleteFirewallRule($delete_firewall_rule_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->deleteFirewallRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_firewall_rule_request_content** | [**\HostAfrica\SDK\Model\DeleteFirewallRuleRequestContent**](../Model/DeleteFirewallRuleRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\DeleteFirewallRuleResponseContent**](../Model/DeleteFirewallRuleResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFirewallRules()`

```php
listFirewallRules($list_firewall_rules_request_content): \HostAfrica\SDK\Model\ListFirewallRulesResponseContent
```



Retrieves the list of firewall rules and available options for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_firewall_rules_request_content = new \HostAfrica\SDK\Model\ListFirewallRulesRequestContent(); // \HostAfrica\SDK\Model\ListFirewallRulesRequestContent

try {
    $result = $apiInstance->listFirewallRules($list_firewall_rules_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->listFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_firewall_rules_request_content** | [**\HostAfrica\SDK\Model\ListFirewallRulesRequestContent**](../Model/ListFirewallRulesRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ListFirewallRulesResponseContent**](../Model/ListFirewallRulesResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveFirewallRule()`

```php
moveFirewallRule($move_firewall_rule_request_content): \HostAfrica\SDK\Model\MoveFirewallRuleResponseContent
```



Moves a firewall rule to a different position in the rule list. Supports both absolute positioning (target_pos) and relative movement (direction). Exactly one of target_pos or direction must be provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$move_firewall_rule_request_content = new \HostAfrica\SDK\Model\MoveFirewallRuleRequestContent(); // \HostAfrica\SDK\Model\MoveFirewallRuleRequestContent

try {
    $result = $apiInstance->moveFirewallRule($move_firewall_rule_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->moveFirewallRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **move_firewall_rule_request_content** | [**\HostAfrica\SDK\Model\MoveFirewallRuleRequestContent**](../Model/MoveFirewallRuleRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\MoveFirewallRuleResponseContent**](../Model/MoveFirewallRuleResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFirewallRule()`

```php
updateFirewallRule($update_firewall_rule_request_content): \HostAfrica\SDK\Model\UpdateFirewallRuleResponseContent
```



Updates an existing firewall rule for a VPS service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_firewall_rule_request_content = new \HostAfrica\SDK\Model\UpdateFirewallRuleRequestContent(); // \HostAfrica\SDK\Model\UpdateFirewallRuleRequestContent

try {
    $result = $apiInstance->updateFirewallRule($update_firewall_rule_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateFirewallRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_firewall_rule_request_content** | [**\HostAfrica\SDK\Model\UpdateFirewallRuleRequestContent**](../Model/UpdateFirewallRuleRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\UpdateFirewallRuleResponseContent**](../Model/UpdateFirewallRuleResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
