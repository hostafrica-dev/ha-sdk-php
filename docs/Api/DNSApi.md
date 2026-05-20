# HostAfrica\SDK\DNSApi

Manage reverse DNS (rDNS) records that map IP addresses assigned to your services back to hostnames.

All URIs are relative to https://api.hostafrica.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRdnsRecord()**](DNSApi.md#createRdnsRecord) | **POST** /dns/create-rdns-record |  |
| [**deleteRdnsRecord()**](DNSApi.md#deleteRdnsRecord) | **POST** /dns/delete-rdns-record |  |
| [**listRdnsRecords()**](DNSApi.md#listRdnsRecords) | **POST** /dns/list-rdns-records |  |


## `createRdnsRecord()`

```php
createRdnsRecord($create_rdns_record_request_content): \HostAfrica\SDK\Model\CreateRdnsRecordResponseContent
```



Creates (or upserts) a PTR record for the authenticated client. If the client already owns a PTR for the same (serverid, ip) it is updated in place; if another client owns it a 409 is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_rdns_record_request_content = new \HostAfrica\SDK\Model\CreateRdnsRecordRequestContent(); // \HostAfrica\SDK\Model\CreateRdnsRecordRequestContent

try {
    $result = $apiInstance->createRdnsRecord($create_rdns_record_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->createRdnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_rdns_record_request_content** | [**\HostAfrica\SDK\Model\CreateRdnsRecordRequestContent**](../Model/CreateRdnsRecordRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\CreateRdnsRecordResponseContent**](../Model/CreateRdnsRecordResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRdnsRecord()`

```php
deleteRdnsRecord($delete_rdns_record_request_content): \HostAfrica\SDK\Model\DeleteRdnsRecordResponseContent
```



Deletes a PTR (rDNS) record owned by the authenticated client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_rdns_record_request_content = new \HostAfrica\SDK\Model\DeleteRdnsRecordRequestContent(); // \HostAfrica\SDK\Model\DeleteRdnsRecordRequestContent

try {
    $result = $apiInstance->deleteRdnsRecord($delete_rdns_record_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->deleteRdnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_rdns_record_request_content** | [**\HostAfrica\SDK\Model\DeleteRdnsRecordRequestContent**](../Model/DeleteRdnsRecordRequestContent.md)|  | |

### Return type

[**\HostAfrica\SDK\Model\DeleteRdnsRecordResponseContent**](../Model/DeleteRdnsRecordResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRdnsRecords()`

```php
listRdnsRecords(): \HostAfrica\SDK\Model\ListRdnsRecordsResponseContent
```



Lists all rDNS (PTR) records and available services for the authenticated client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listRdnsRecords();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->listRdnsRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\HostAfrica\SDK\Model\ListRdnsRecordsResponseContent**](../Model/ListRdnsRecordsResponseContent.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
