# # FirewallRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**digest** | **string** | SHA1 digest of the rule |
**pos** | **int** | Position/priority of the rule |
**type** | **string** | Rule type (in, out) |
**action** | **string** | Action to perform (ACCEPT, REJECT, DROP) |
**iface** | **string** | Network interface name |
**enable** | **int** | Whether the rule is enabled (1&#x3D;enabled, 0&#x3D;disabled) |
**comment** | **string** | Comment/description for the rule | [optional]
**source** | **string** | Source address/network | [optional]
**dest** | **string** | Destination address/network | [optional]
**proto** | **string** | Protocol (tcp, udp, icmp, etc) | [optional]
**dport** | **string** | Destination port | [optional]
**sport** | **string** | Source port | [optional]
**macro** | **string** | Firewall macro name | [optional]
**log** | **string** | Log level | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
