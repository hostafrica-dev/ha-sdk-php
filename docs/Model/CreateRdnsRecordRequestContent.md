# # CreateRdnsRecordRequestContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **int** | Zone type: 0&#x3D;OTHER, 1&#x3D;DOMAIN, 2&#x3D;HOSTING, 3&#x3D;ADDON |
**relid** | **int** | Related service id matching the zone type (hosting, addon, or domain) |
**ip** | **string** | IPv4 or IPv6 address the PTR record should point from |
**hostname** | **string** | PTR target hostname |
**ttl** | **int** | Time-to-live in seconds. Defaults to 14400; clamped to [30, 86400] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
