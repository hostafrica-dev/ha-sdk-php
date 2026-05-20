# # CatalogueProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | WHMCS product identifier |
**name** | **string** | Product display name |
**type** | **string** | Product type (e.g. server) |
**requires_hostname** | **bool** | Whether the product requires a hostname at order time |
**billing_cycles** | **string[]** | Billing cycles available for this product |
**pricing** | **mixed** | Base per-cycle pricing for the product (before plan selection) |
**use_plans** | **bool** | Whether this product uses plan-based sizing |
**plans** | [**\HostAfrica\SDK\Model\CataloguePlan[]**](CataloguePlan.md) | Available plans (size tiers) for this product |
**config_options** | [**\HostAfrica\SDK\Model\CatalogueConfigOption[]**](CatalogueConfigOption.md) | Configurable add-on options for this product |
**additional_information** | **mixed** | Additional product information fields |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
