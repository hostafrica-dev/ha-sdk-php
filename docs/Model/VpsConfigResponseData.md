# # VpsConfigResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Status message indicating the result |
**hostname** | **string** | Hostname of the VPS | [optional]
**is_kvm** | **bool** | Whether the VPS uses KVM virtualisation | [optional]
**sshkeys_enabled** | **bool** | Whether SSH key management is enabled for this VPS | [optional]
**available_boot_order** | **mixed** | Available boot order options keyed by device identifier | [optional]
**boot_order0** | **string** | Primary boot order slot (device identifier, or null) | [optional]
**boot_order1** | **string** | Secondary boot order slot (device identifier, or null) | [optional]
**boot_order2** | **string** | Tertiary boot order slot (device identifier, or null) | [optional]
**sshkeys** | **string** | Current SSH key(s) configured on the VPS (cloud-init) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
