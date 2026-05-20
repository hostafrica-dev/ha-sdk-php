# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Unique order identifier |
**order_number** | **string** | Human-readable order reference number |
**invoice_id** | **int** | Associated invoice identifier |
**placed_at** | **string** | Timestamp when the order was placed (ISO 8601) |
**currency** | **string** | ISO currency code (e.g. ZAR) |
**total** | **string** | Total order amount as a decimal string |
**balance_due** | **string** | Remaining balance due as a decimal string |
**invoice_status** | **string** | Invoice status (e.g. Paid, Unpaid) |
**last_attempt** | [**\HostAfrica\SDK\Model\OrderLastAttempt**](OrderLastAttempt.md) |  | [optional]
**payment_status** | **string** | Payment status (e.g. paid, pending, failed) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
