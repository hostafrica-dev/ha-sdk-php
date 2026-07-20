# # RdnsRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Record identifier — use as record_id in PUT/DELETE |
**ip** | **string** | The IPv4/IPv6 address the PTR points from |
**hostname** | **string** | Final concatenated PTR target (sub.from) |
**ttl** | **int** | Time-to-live in seconds | [optional]
**type** | **int** | Zone type: 0&#x3D;OTHER, 1&#x3D;DOMAIN, 2&#x3D;HOSTING, 3&#x3D;ADDON | [optional]
**relid** | **int** | Related service id for the zone type (hosting, addon, or domain) | [optional]
**serverid** | **int** |  |
**clientid** | **int** |  |
**packageid** | **int** |  |
**from** | **string** | Reverse-DNS zone name (e.g. 10.113.0.203.in-addr.arpa) | [optional]
**sub** | **string** | Sub-label component of the PTR | [optional]
**name** | **string** | Full PTR name (e.g. 10.113.0.203.in-addr.arpa) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
