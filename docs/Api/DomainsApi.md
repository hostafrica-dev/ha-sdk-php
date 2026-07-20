# HostAfrica\SDK\DomainsApi

Check domain availability and generate AI-powered domain name suggestions. Public MCP tools — no account required.

All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkDomainAvailability()**](DomainsApi.md#checkDomainAvailability) | **POST** /domain/check-availability |  |
| [**getDomain()**](DomainsApi.md#getDomain) | **POST** /domain/get-domain |  |
| [**getDomainContacts()**](DomainsApi.md#getDomainContacts) | **POST** /domain/get-domain-contacts |  |
| [**listDomains()**](DomainsApi.md#listDomains) | **POST** /domain/list-domains |  |
| [**listDomainsRequiringData()**](DomainsApi.md#listDomainsRequiringData) | **POST** /domain/list-domains-requiring-data |  |
| [**saveDomainRequiredData()**](DomainsApi.md#saveDomainRequiredData) | **POST** /domain/save-domain-required-data |  |
| [**suggestDomains()**](DomainsApi.md#suggestDomains) | **POST** /domain/suggest |  |
| [**updateDomainSettings()**](DomainsApi.md#updateDomainSettings) | **POST** /domain/update-domain-settings |  |


## `checkDomainAvailability()`

```php
checkDomainAvailability($check_domain_availability_request_content): \HostAfrica\SDK\Model\CheckDomainAvailabilityResponseContent
```



Checks domain name availability for a single domain or a comma-separated batch. Exactly one of domain or domains must be provided. Returns pricing, suggestions, and register_url scoped to the requested currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_domain_availability_request_content = new \HostAfrica\SDK\Model\CheckDomainAvailabilityRequestContent(); // \HostAfrica\SDK\Model\CheckDomainAvailabilityRequestContent

try {
    $result = $apiInstance->checkDomainAvailability($check_domain_availability_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->checkDomainAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_domain_availability_request_content** | [**\HostAfrica\SDK\Model\CheckDomainAvailabilityRequestContent**](../Model/CheckDomainAvailabilityRequestContent.md)|  | [optional] |

### Return type

[**\HostAfrica\SDK\Model\CheckDomainAvailabilityResponseContent**](../Model/CheckDomainAvailabilityResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomain()`

```php
getDomain($get_domain_request_content): \HostAfrica\SDK\Model\GetDomainResponseContent
```



Gets details for an owned domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_domain_request_content = new \HostAfrica\SDK\Model\GetDomainRequestContent(); // \HostAfrica\SDK\Model\GetDomainRequestContent

try {
    $result = $apiInstance->getDomain($get_domain_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_domain_request_content** | [**\HostAfrica\SDK\Model\GetDomainRequestContent**](../Model/GetDomainRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\GetDomainResponseContent**](../Model/GetDomainResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainContacts()`

```php
getDomainContacts($get_domain_contacts_request_content): \HostAfrica\SDK\Model\GetDomainContactsResponseContent
```



Retrieves WHOIS contact information for an owned domain. Contact field names vary by TLD and registrar; use the returned structure when building custom contact update payloads.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_domain_contacts_request_content = new \HostAfrica\SDK\Model\GetDomainContactsRequestContent(); // \HostAfrica\SDK\Model\GetDomainContactsRequestContent

try {
    $result = $apiInstance->getDomainContacts($get_domain_contacts_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomainContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_domain_contacts_request_content** | [**\HostAfrica\SDK\Model\GetDomainContactsRequestContent**](../Model/GetDomainContactsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\GetDomainContactsResponseContent**](../Model/GetDomainContactsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDomains()`

```php
listDomains(): \HostAfrica\SDK\Model\ListDomainsResponseContent
```



List all domains belonging to the authenticated client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\HostAfrica\SDK\Model\ListDomainsResponseContent**](../Model/ListDomainsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDomainsRequiringData()`

```php
listDomainsRequiringData(): \HostAfrica\SDK\Model\ListDomainsRequiringDataResponseContent
```



Lists domains belonging to the authenticated client that require additional registrar or contact data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDomainsRequiringData();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listDomainsRequiringData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\HostAfrica\SDK\Model\ListDomainsRequiringDataResponseContent**](../Model/ListDomainsRequiringDataResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveDomainRequiredData()`

```php
saveDomainRequiredData($save_domain_required_data_request_content): \HostAfrica\SDK\Model\SaveDomainRequiredDataResponseContent
```



Saves additional registrar field values for a pending domain. Keys must match additionalFields[].name from list-domains-requiring-data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_domain_required_data_request_content = new \HostAfrica\SDK\Model\SaveDomainRequiredDataRequestContent(); // \HostAfrica\SDK\Model\SaveDomainRequiredDataRequestContent

try {
    $result = $apiInstance->saveDomainRequiredData($save_domain_required_data_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->saveDomainRequiredData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **save_domain_required_data_request_content** | [**\HostAfrica\SDK\Model\SaveDomainRequiredDataRequestContent**](../Model/SaveDomainRequiredDataRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\SaveDomainRequiredDataResponseContent**](../Model/SaveDomainRequiredDataResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suggestDomains()`

```php
suggestDomains($suggest_domains_request_content): \HostAfrica\SDK\Model\SuggestDomainsResponseContent
```



Generates AI-powered domain name suggestions from a natural-language description. Returns suggested domains with availability status and pricing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$suggest_domains_request_content = new \HostAfrica\SDK\Model\SuggestDomainsRequestContent(); // \HostAfrica\SDK\Model\SuggestDomainsRequestContent

try {
    $result = $apiInstance->suggestDomains($suggest_domains_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->suggestDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **suggest_domains_request_content** | [**\HostAfrica\SDK\Model\SuggestDomainsRequestContent**](../Model/SuggestDomainsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\SuggestDomainsResponseContent**](../Model/SuggestDomainsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomainSettings()`

```php
updateDomainSettings($update_domain_settings_request_content): \HostAfrica\SDK\Model\UpdateDomainSettingsResponseContent
```



Updates a single domain setting (auto-renew, ID protection, or paid addons). One setting per request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_domain_settings_request_content = new \HostAfrica\SDK\Model\UpdateDomainSettingsRequestContent(); // \HostAfrica\SDK\Model\UpdateDomainSettingsRequestContent

try {
    $result = $apiInstance->updateDomainSettings($update_domain_settings_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->updateDomainSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_domain_settings_request_content** | [**\HostAfrica\SDK\Model\UpdateDomainSettingsRequestContent**](../Model/UpdateDomainSettingsRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\UpdateDomainSettingsResponseContent**](../Model/UpdateDomainSettingsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
