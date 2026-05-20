# # ListRdnsResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**records** | [**\HostAfrica\SDK\Model\RdnsRecord[]**](RdnsRecord.md) | All PTR records owned by the client |
**ptr_count** | **int** | Number of PTR records |
**ptr_limit** | **int** | Lowest finite per-package PTR limit (-1 &#x3D; unlimited / not configured) |
**custom_ip_mode** | **bool** | Any IP is allowed in the PTR add form |
**subnet_custom_ip_mode** | **bool** | Free-text IP allowed inside an offered subnet pool |
**service_only_ips** | **bool** | UI hint: only show IPs tied to the related service |
**available_items** | [**\HostAfrica\SDK\Model\RdnsAvailableItem[]**](RdnsAvailableItem.md) | Services the client can manage PTRs for |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
