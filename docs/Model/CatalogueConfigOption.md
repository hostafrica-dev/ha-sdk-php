# # CatalogueConfigOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Config option identifier |
**name** | **string** | Config option display name |
**type** | **string** | Control type (e.g. selection, quantity) |
**qty_min** | **int** | Minimum quantity (null for selection types) | [optional]
**qty_max** | **int** | Maximum quantity (null for selection types) | [optional]
**suboptions** | [**\HostAfrica\SDK\Model\CatalogueConfigSuboption[]**](CatalogueConfigSuboption.md) | Available suboptions for this config option |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
