# HostAfrica\SDK\ServiceManagementApi



All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelVps()**](ServiceManagementApi.md#cancelVps) | **POST** /vps/cancel |  |
| [**createOrder()**](ServiceManagementApi.md#createOrder) | **POST** /vps/create-order |  |
| [**getCatalogue()**](ServiceManagementApi.md#getCatalogue) | **POST** /vps/get-catalogue |  |
| [**listOrders()**](ServiceManagementApi.md#listOrders) | **POST** /vps/list-orders |  |
| [**retryPayment()**](ServiceManagementApi.md#retryPayment) | **POST** /vps/retry-payment |  |
| [**validatePricing()**](ServiceManagementApi.md#validatePricing) | **POST** /vps/validate-pricing |  |


## `cancelVps()`

```php
cancelVps($cancel_vps_request_content): \HostAfrica\SDK\Model\CancelVpsResponseContent
```



Cancels a VPS service. This action is irreversible

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\ServiceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancel_vps_request_content = new \HostAfrica\SDK\Model\CancelVpsRequestContent(); // \HostAfrica\SDK\Model\CancelVpsRequestContent

try {
    $result = $apiInstance->cancelVps($cancel_vps_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceManagementApi->cancelVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancel_vps_request_content** | [**\HostAfrica\SDK\Model\CancelVpsRequestContent**](../Model/CancelVpsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\CancelVpsResponseContent**](../Model/CancelVpsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($create_order_request_content): \HostAfrica\SDK\Model\CreateOrderResponseContent
```



Creates an order through checkout. Returns payment status; on failure also includes payment_error with code and message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\ServiceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_order_request_content = new \HostAfrica\SDK\Model\CreateOrderRequestContent(); // \HostAfrica\SDK\Model\CreateOrderRequestContent

try {
    $result = $apiInstance->createOrder($create_order_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceManagementApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_order_request_content** | [**\HostAfrica\SDK\Model\CreateOrderRequestContent**](../Model/CreateOrderRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\CreateOrderResponseContent**](../Model/CreateOrderResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCatalogue()`

```php
getCatalogue($get_catalogue_request_content): \HostAfrica\SDK\Model\GetCatalogueResponseContent
```



Retrieves the product catalogue, optionally filtered by group or product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\ServiceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_catalogue_request_content = new \HostAfrica\SDK\Model\GetCatalogueRequestContent(); // \HostAfrica\SDK\Model\GetCatalogueRequestContent

try {
    $result = $apiInstance->getCatalogue($get_catalogue_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceManagementApi->getCatalogue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_catalogue_request_content** | [**\HostAfrica\SDK\Model\GetCatalogueRequestContent**](../Model/GetCatalogueRequestContent.md)|  | [optional] |

### Return type

[**\HostAfrica\SDK\Model\GetCatalogueResponseContent**](../Model/GetCatalogueResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders(): \HostAfrica\SDK\Model\ListOrdersResponseContent
```



Lists all orders for the authenticated user, including payment and invoice status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\ServiceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listOrders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceManagementApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\HostAfrica\SDK\Model\ListOrdersResponseContent**](../Model/ListOrdersResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryPayment()`

```php
retryPayment($retry_payment_request_content): \HostAfrica\SDK\Model\RetryPaymentResponseContent
```



Retries a failed or pending payment for an existing order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\ServiceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retry_payment_request_content = new \HostAfrica\SDK\Model\RetryPaymentRequestContent(); // \HostAfrica\SDK\Model\RetryPaymentRequestContent

try {
    $result = $apiInstance->retryPayment($retry_payment_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceManagementApi->retryPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retry_payment_request_content** | [**\HostAfrica\SDK\Model\RetryPaymentRequestContent**](../Model/RetryPaymentRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\RetryPaymentResponseContent**](../Model/RetryPaymentResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validatePricing()`

```php
validatePricing($validate_pricing_request_content): \HostAfrica\SDK\Model\ValidatePricingResponseContent
```



Validates pricing for one or more products, returning per-product breakdown and order summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\ServiceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_pricing_request_content = new \HostAfrica\SDK\Model\ValidatePricingRequestContent(); // \HostAfrica\SDK\Model\ValidatePricingRequestContent

try {
    $result = $apiInstance->validatePricing($validate_pricing_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceManagementApi->validatePricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_pricing_request_content** | [**\HostAfrica\SDK\Model\ValidatePricingRequestContent**](../Model/ValidatePricingRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\ValidatePricingResponseContent**](../Model/ValidatePricingResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
