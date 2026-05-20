# # RdnsAvailableItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **int** | Zone type matching RdnsRecord.type |
**relid** | **int** | Related service identifier |
**name** | **string** | Display label for the service |
**ips** | **string[]** | Concrete IP addresses available for this service |
**pools** | [**\HostAfrica\SDK\Model\RdnsPool[]**](RdnsPool.md) | Subnet pools available when subnet_custom_ip_mode is on |
**ptr_limit** | **int** | Per-package PTR limit (-1 &#x3D; unlimited) |
**server_id** | **int** |  |
**allow_rdns** | **bool** | Server has ALLOW_RDNS&#x3D;on |
**rdns_supported** | **bool** | Server module supports rDNS |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
