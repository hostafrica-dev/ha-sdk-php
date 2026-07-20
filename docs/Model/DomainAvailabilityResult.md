# # DomainAvailabilityResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Fully qualified domain name |
**premium** | **bool** | Whether the domain is a premium domain | [optional]
**status** | **string** | Availability status: \&quot;available\&quot; or \&quot;unavailable\&quot; |
**addons** | [**\HostAfrica\SDK\Model\DomainAddons**](DomainAddons.md) |  | [optional]
**pricing** | [**\HostAfrica\SDK\Model\DomainPricing**](DomainPricing.md) |  | [optional]
**requires_additional_info** | **bool** | Whether the domain requires additional registration information | [optional]
**additional_info** | **mixed** | Opaque additional registration data from upstream | [optional]
**group** | **string** | Product group from upstream | [optional]
**register_url** | **string** | Checkout URL for available domains, enriched server-side | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
