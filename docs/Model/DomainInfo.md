# # DomainInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain_id** | **string** | Domain service id |
**type** | **string** | Domain operation type (e.g. Register, Transfer) |
**domain** | **string** | Fully qualified domain name |
**status** | **string** | Domain status (e.g. Active, Expired, Cancelled) |
**period** | **int** | Registration or billing period in years |
**donotrenew** | **int** | Renewal flag: 0 &#x3D; renew, 1 &#x3D; do not renew |
**id_protection** | **int** | WHOIS privacy enabled: 0 &#x3D; off, 1 &#x3D; on |
**id_protection_supported** | **bool** | Whether the TLD supports ID protection |
**recurringamount** | **string** | Recurring amount as a decimal string (e.g. \&quot;149.99\&quot;) |
**expirydate** | **string** | Domain expiry date (YYYY-MM-DD) | [optional]
**nextinvoicedate** | **string** | Next invoice date (YYYY-MM-DD) | [optional]
**nextduedate** | **string** | Next due date (YYYY-MM-DD) | [optional]
**has_hosting** | [**\HostAfrica\SDK\Model\DomainHostingLink**](DomainHostingLink.md) |  | [optional]
**has_dns_manager_zone** | **bool** | Whether a DNS Manager zone exists for this domain name |
**evaluation** | **mixed** | Domain evaluator result when enabled; null when unavailable | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
