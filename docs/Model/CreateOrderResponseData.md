# # CreateOrderResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Order identifier |
**invoice_id** | **int** | Invoice identifier for this order |
**order_number** | **string** | Human-readable order reference number |
**total** | [**\HostAfrica\SDK\Model\CreateOrderTotal**](CreateOrderTotal.md) |  |
**promo_applied** | **string** | Promotional code that was applied | [optional]
**payment_method** | **string** | Payment method used (e.g. stripe) |
**payment_status** | [**\HostAfrica\SDK\Model\PaymentStatus**](PaymentStatus.md) |  |
**items** | [**\HostAfrica\SDK\Model\CreateOrderItems**](CreateOrderItems.md) |  |
**payment_error** | [**\HostAfrica\SDK\Model\PaymentError**](PaymentError.md) |  | [optional]
**warnings** | [**\HostAfrica\SDK\Model\OrderWarning[]**](OrderWarning.md) | Warnings present when non-critical issues occurred (e.g. autorenew deferred) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
