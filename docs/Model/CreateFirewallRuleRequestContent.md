# # CreateFirewallRuleRequestContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Service ID - must be sent as a string |
**type** | [**\HostAfrica\SDK\Model\FirewallRuleType**](FirewallRuleType.md) |  |
**rule_action** | [**\HostAfrica\SDK\Model\FirewallRuleAction**](FirewallRuleAction.md) |  |
**enable** | **int** | Whether the rule is enabled (1&#x3D;enabled, 0&#x3D;disabled) | [optional]
**comment** | **string** | Comment/description for the rule | [optional]
**source** | **string** | Source address/network | [optional]
**dest** | **string** | Destination address/network | [optional]
**proto** | **string** | Protocol (tcp, udp, icmp, etc). Use &#39;0&#39; or omit for none | [optional]
**dport** | **string** | Destination port | [optional]
**sport** | **string** | Source port | [optional]
**macro** | **string** | Firewall macro name | [optional]
**iface** | **string** | Network interface name | [optional]
**log** | **string** | Log level | [optional]
**pos** | **int** | Position/priority of the rule | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
