# # UpdateDomainSettingsData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Status message indicating the result |
**domain_id** | **string** | Domain service id as returned by upstream |
**setting** | [**\HostAfrica\SDK\Model\DomainSettingKey**](DomainSettingKey.md) |  |
**value** | **bool** | Boolean value requested |
**requires_payment** | **bool** | True when payment must be completed before a paid addon is enabled |
**invoice_id** | **int** | Invoice id when requires_payment is true | [optional]
**amount** | **float** | Invoice amount in client currency when requires_payment is true | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
