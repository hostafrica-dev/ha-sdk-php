# # MoveFirewallRuleRequestContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Service ID - must be sent as a string |
**pos** | **int** | Current position/index of the rule to move |
**target_pos** | **int** | Target position/index for the rule (mutually exclusive with direction) | [optional]
**direction** | [**\HostAfrica\SDK\Model\FirewallMoveDirection**](FirewallMoveDirection.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
