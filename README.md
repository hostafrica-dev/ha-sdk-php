# HaSDKPhp

HostAfrica API


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/hostafrica/ha-sdk-php.git"
    }
  ],
  "require": {
    "hostafrica/ha-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/HaSDKPhp/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: BearerAuth
$config = HostAfrica\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HostAfrica\SDK\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_backup_request_content = new \HostAfrica\SDK\Model\CreateBackupRequestContent(); // \HostAfrica\SDK\Model\CreateBackupRequestContent

try {
    $result = $apiInstance->createBackup($create_backup_request_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->createBackup: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.hostafrica.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BackupsApi* | [**createBackup**](docs/Api/BackupsApi.md#createbackup) | **POST** /vps/create-backup | 
*BackupsApi* | [**createBackupSchedule**](docs/Api/BackupsApi.md#createbackupschedule) | **POST** /vps/create-backup-schedule | 
*BackupsApi* | [**deleteBackup**](docs/Api/BackupsApi.md#deletebackup) | **POST** /vps/delete-backup | 
*BackupsApi* | [**deleteBackupSchedule**](docs/Api/BackupsApi.md#deletebackupschedule) | **POST** /vps/delete-backup-schedule | 
*BackupsApi* | [**editBackupSchedule**](docs/Api/BackupsApi.md#editbackupschedule) | **POST** /vps/edit-backup-schedule | 
*BackupsApi* | [**listBackupSchedules**](docs/Api/BackupsApi.md#listbackupschedules) | **POST** /vps/list-backup-schedules | 
*BackupsApi* | [**listBackups**](docs/Api/BackupsApi.md#listbackups) | **POST** /vps/list-backups | 
*BackupsApi* | [**restoreBackup**](docs/Api/BackupsApi.md#restorebackup) | **POST** /vps/restore-backup | 
*ConsoleAccessApi* | [**getNoVncConsole**](docs/Api/ConsoleAccessApi.md#getnovncconsole) | **POST** /vps/novnc-console | 
*DNSApi* | [**createRdnsRecord**](docs/Api/DNSApi.md#createrdnsrecord) | **POST** /dns/create-rdns-record | 
*DNSApi* | [**deleteRdnsRecord**](docs/Api/DNSApi.md#deleterdnsrecord) | **POST** /dns/delete-rdns-record | 
*DNSApi* | [**listRdnsRecords**](docs/Api/DNSApi.md#listrdnsrecords) | **POST** /dns/list-rdns-records | 
*FirewallApi* | [**createFirewallRule**](docs/Api/FirewallApi.md#createfirewallrule) | **POST** /vps/create-firewall-rule | 
*FirewallApi* | [**deleteFirewallRule**](docs/Api/FirewallApi.md#deletefirewallrule) | **POST** /vps/delete-firewall-rule | 
*FirewallApi* | [**listFirewallRules**](docs/Api/FirewallApi.md#listfirewallrules) | **POST** /vps/list-firewall-rules | 
*FirewallApi* | [**moveFirewallRule**](docs/Api/FirewallApi.md#movefirewallrule) | **POST** /vps/move-firewall-rule | 
*FirewallApi* | [**updateFirewallRule**](docs/Api/FirewallApi.md#updatefirewallrule) | **POST** /vps/update-firewall-rule | 
*MonitoringApi* | [**createNotification**](docs/Api/MonitoringApi.md#createnotification) | **POST** /vps/create-notification | 
*MonitoringApi* | [**deleteNotification**](docs/Api/MonitoringApi.md#deletenotification) | **POST** /vps/delete-notification | 
*MonitoringApi* | [**listNotifications**](docs/Api/MonitoringApi.md#listnotifications) | **POST** /vps/list-notifications | 
*MonitoringApi* | [**updateNotification**](docs/Api/MonitoringApi.md#updatenotification) | **POST** /vps/update-notification | 
*PowerManagementApi* | [**createPowerTask**](docs/Api/PowerManagementApi.md#createpowertask) | **POST** /vps/create-power-task | 
*PowerManagementApi* | [**deletePowerTask**](docs/Api/PowerManagementApi.md#deletepowertask) | **POST** /vps/delete-power-task | 
*PowerManagementApi* | [**listPowerTasks**](docs/Api/PowerManagementApi.md#listpowertasks) | **POST** /vps/list-power-tasks | 
*PowerManagementApi* | [**rebootVps**](docs/Api/PowerManagementApi.md#rebootvps) | **POST** /vps/reboot | 
*PowerManagementApi* | [**shutdownVps**](docs/Api/PowerManagementApi.md#shutdownvps) | **POST** /vps/shutdown | 
*PowerManagementApi* | [**startVps**](docs/Api/PowerManagementApi.md#startvps) | **POST** /vps/start | 
*PowerManagementApi* | [**stopVps**](docs/Api/PowerManagementApi.md#stopvps) | **POST** /vps/stop | 
*PowerManagementApi* | [**updatePowerTask**](docs/Api/PowerManagementApi.md#updatepowertask) | **POST** /vps/update-power-task | 
*SecurityApi* | [**changePassword**](docs/Api/SecurityApi.md#changepassword) | **POST** /vps/change-password | 
*SecurityApi* | [**getPrivateSshKey**](docs/Api/SecurityApi.md#getprivatesshkey) | **POST** /vps/get-private-ssh-keys | 
*SecurityApi* | [**getPublicSshKey**](docs/Api/SecurityApi.md#getpublicsshkey) | **POST** /vps/get-public-ssh-keys | 
*SecurityApi* | [**updateSshKeys**](docs/Api/SecurityApi.md#updatesshkeys) | **POST** /vps/update-ssh-keys | 
*ServiceManagementApi* | [**cancelVps**](docs/Api/ServiceManagementApi.md#cancelvps) | **POST** /vps/cancel | 
*ServiceManagementApi* | [**createOrder**](docs/Api/ServiceManagementApi.md#createorder) | **POST** /vps/create-order | 
*ServiceManagementApi* | [**getCatalogue**](docs/Api/ServiceManagementApi.md#getcatalogue) | **POST** /vps/get-catalogue | 
*ServiceManagementApi* | [**listOrders**](docs/Api/ServiceManagementApi.md#listorders) | **POST** /vps/list-orders | 
*ServiceManagementApi* | [**retryPayment**](docs/Api/ServiceManagementApi.md#retrypayment) | **POST** /vps/retry-payment | 
*ServiceManagementApi* | [**validatePricing**](docs/Api/ServiceManagementApi.md#validatepricing) | **POST** /vps/validate-pricing | 
*SnapshotsApi* | [**createSnapshot**](docs/Api/SnapshotsApi.md#createsnapshot) | **POST** /vps/create-snapshot | 
*SnapshotsApi* | [**deleteSnapshot**](docs/Api/SnapshotsApi.md#deletesnapshot) | **POST** /vps/delete-snapshot | 
*SnapshotsApi* | [**listSnapshots**](docs/Api/SnapshotsApi.md#listsnapshots) | **POST** /vps/list-snapshots | 
*SnapshotsApi* | [**rollbackSnapshot**](docs/Api/SnapshotsApi.md#rollbacksnapshot) | **POST** /vps/rollback-snapshot | 
*SnapshotsApi* | [**updateSnapshot**](docs/Api/SnapshotsApi.md#updatesnapshot) | **POST** /vps/update-snapshot | 
*UserManagementApi* | [**userChangePassword**](docs/Api/UserManagementApi.md#userchangepassword) | **POST** /user/change-password | 
*VPSManagementApi* | [**getVpsConfig**](docs/Api/VPSManagementApi.md#getvpsconfig) | **POST** /vps/get-config | 
*VPSManagementApi* | [**getVpsDetails**](docs/Api/VPSManagementApi.md#getvpsdetails) | **POST** /vps/get-details | 
*VPSManagementApi* | [**listIsos**](docs/Api/VPSManagementApi.md#listisos) | **POST** /vps/list-isos | 
*VPSManagementApi* | [**listReinstallOs**](docs/Api/VPSManagementApi.md#listreinstallos) | **POST** /vps/list-reinstall-images | 
*VPSManagementApi* | [**listVpsServices**](docs/Api/VPSManagementApi.md#listvpsservices) | **POST** /vps/list-vps-services | 
*VPSManagementApi* | [**mountIso**](docs/Api/VPSManagementApi.md#mountiso) | **POST** /vps/mount-iso | 
*VPSManagementApi* | [**triggerReinstall**](docs/Api/VPSManagementApi.md#triggerreinstall) | **POST** /vps/trigger-reinstall | 
*VPSManagementApi* | [**updateVpsConfig**](docs/Api/VPSManagementApi.md#updatevpsconfig) | **POST** /vps/update-config | 

## Models

- [BackupCreateResponseData](docs/Model/BackupCreateResponseData.md)
- [BackupCreationInfo](docs/Model/BackupCreationInfo.md)
- [BackupItem](docs/Model/BackupItem.md)
- [BackupMode](docs/Model/BackupMode.md)
- [BackupModeType](docs/Model/BackupModeType.md)
- [BackupSchedule](docs/Model/BackupSchedule.md)
- [BackupScheduleListResponseData](docs/Model/BackupScheduleListResponseData.md)
- [BadRequestErrorResponseContent](docs/Model/BadRequestErrorResponseContent.md)
- [BillingCycle](docs/Model/BillingCycle.md)
- [CancelVpsRequestContent](docs/Model/CancelVpsRequestContent.md)
- [CancelVpsResponseContent](docs/Model/CancelVpsResponseContent.md)
- [CatalogueConfigOption](docs/Model/CatalogueConfigOption.md)
- [CatalogueConfigSuboption](docs/Model/CatalogueConfigSuboption.md)
- [CatalogueCurrency](docs/Model/CatalogueCurrency.md)
- [CatalogueData](docs/Model/CatalogueData.md)
- [CatalogueGroup](docs/Model/CatalogueGroup.md)
- [CataloguePlan](docs/Model/CataloguePlan.md)
- [CatalogueProduct](docs/Model/CatalogueProduct.md)
- [ChangePasswordRequestContent](docs/Model/ChangePasswordRequestContent.md)
- [ChangePasswordResponseContent](docs/Model/ChangePasswordResponseContent.md)
- [CompressionMethod](docs/Model/CompressionMethod.md)
- [CompressionType](docs/Model/CompressionType.md)
- [CreateBackupRequestContent](docs/Model/CreateBackupRequestContent.md)
- [CreateBackupResponseContent](docs/Model/CreateBackupResponseContent.md)
- [CreateBackupScheduleRequestContent](docs/Model/CreateBackupScheduleRequestContent.md)
- [CreateBackupScheduleResponseContent](docs/Model/CreateBackupScheduleResponseContent.md)
- [CreateFirewallRuleRequestContent](docs/Model/CreateFirewallRuleRequestContent.md)
- [CreateFirewallRuleResponseContent](docs/Model/CreateFirewallRuleResponseContent.md)
- [CreateNotificationRequestContent](docs/Model/CreateNotificationRequestContent.md)
- [CreateNotificationResponseContent](docs/Model/CreateNotificationResponseContent.md)
- [CreateOrderDomainItem](docs/Model/CreateOrderDomainItem.md)
- [CreateOrderItems](docs/Model/CreateOrderItems.md)
- [CreateOrderProduct](docs/Model/CreateOrderProduct.md)
- [CreateOrderProductItem](docs/Model/CreateOrderProductItem.md)
- [CreateOrderRequestContent](docs/Model/CreateOrderRequestContent.md)
- [CreateOrderResponseContent](docs/Model/CreateOrderResponseContent.md)
- [CreateOrderResponseData](docs/Model/CreateOrderResponseData.md)
- [CreateOrderTotal](docs/Model/CreateOrderTotal.md)
- [CreatePowerTaskRequestContent](docs/Model/CreatePowerTaskRequestContent.md)
- [CreatePowerTaskResponseContent](docs/Model/CreatePowerTaskResponseContent.md)
- [CreateRdnsRecordRequestContent](docs/Model/CreateRdnsRecordRequestContent.md)
- [CreateRdnsRecordResponseContent](docs/Model/CreateRdnsRecordResponseContent.md)
- [CreateRdnsRecordResponseData](docs/Model/CreateRdnsRecordResponseData.md)
- [CreateSnapshotRequestContent](docs/Model/CreateSnapshotRequestContent.md)
- [CreateSnapshotResponseContent](docs/Model/CreateSnapshotResponseContent.md)
- [DayOfWeek](docs/Model/DayOfWeek.md)
- [DeleteBackupRequestContent](docs/Model/DeleteBackupRequestContent.md)
- [DeleteBackupResponseContent](docs/Model/DeleteBackupResponseContent.md)
- [DeleteBackupScheduleRequestContent](docs/Model/DeleteBackupScheduleRequestContent.md)
- [DeleteBackupScheduleResponseContent](docs/Model/DeleteBackupScheduleResponseContent.md)
- [DeleteFirewallRuleRequestContent](docs/Model/DeleteFirewallRuleRequestContent.md)
- [DeleteFirewallRuleResponseContent](docs/Model/DeleteFirewallRuleResponseContent.md)
- [DeleteNotificationRequestContent](docs/Model/DeleteNotificationRequestContent.md)
- [DeleteNotificationResponseContent](docs/Model/DeleteNotificationResponseContent.md)
- [DeletePowerTaskRequestContent](docs/Model/DeletePowerTaskRequestContent.md)
- [DeletePowerTaskResponseContent](docs/Model/DeletePowerTaskResponseContent.md)
- [DeleteRdnsRecordRequestContent](docs/Model/DeleteRdnsRecordRequestContent.md)
- [DeleteRdnsRecordResponseContent](docs/Model/DeleteRdnsRecordResponseContent.md)
- [DeleteSnapshotRequestContent](docs/Model/DeleteSnapshotRequestContent.md)
- [DeleteSnapshotResponseContent](docs/Model/DeleteSnapshotResponseContent.md)
- [EditBackupScheduleRequestContent](docs/Model/EditBackupScheduleRequestContent.md)
- [EditBackupScheduleResponseContent](docs/Model/EditBackupScheduleResponseContent.md)
- [FirewallListResponseData](docs/Model/FirewallListResponseData.md)
- [FirewallMoveDirection](docs/Model/FirewallMoveDirection.md)
- [FirewallMoveResponseData](docs/Model/FirewallMoveResponseData.md)
- [FirewallOption](docs/Model/FirewallOption.md)
- [FirewallRule](docs/Model/FirewallRule.md)
- [FirewallRuleAction](docs/Model/FirewallRuleAction.md)
- [FirewallRuleType](docs/Model/FirewallRuleType.md)
- [ForbiddenErrorResponseContent](docs/Model/ForbiddenErrorResponseContent.md)
- [GetCatalogueRequestContent](docs/Model/GetCatalogueRequestContent.md)
- [GetCatalogueResponseContent](docs/Model/GetCatalogueResponseContent.md)
- [GetNoVncConsoleRequestContent](docs/Model/GetNoVncConsoleRequestContent.md)
- [GetNoVncConsoleResponseContent](docs/Model/GetNoVncConsoleResponseContent.md)
- [GetPrivateSshKeyRequestContent](docs/Model/GetPrivateSshKeyRequestContent.md)
- [GetPrivateSshKeyResponseContent](docs/Model/GetPrivateSshKeyResponseContent.md)
- [GetPublicSshKeyRequestContent](docs/Model/GetPublicSshKeyRequestContent.md)
- [GetPublicSshKeyResponseContent](docs/Model/GetPublicSshKeyResponseContent.md)
- [GetVpsConfigRequestContent](docs/Model/GetVpsConfigRequestContent.md)
- [GetVpsConfigResponseContent](docs/Model/GetVpsConfigResponseContent.md)
- [GetVpsDetailsRequestContent](docs/Model/GetVpsDetailsRequestContent.md)
- [GetVpsDetailsResponseContent](docs/Model/GetVpsDetailsResponseContent.md)
- [InternalServiceErrorResponseContent](docs/Model/InternalServiceErrorResponseContent.md)
- [InvalidStateErrorResponseContent](docs/Model/InvalidStateErrorResponseContent.md)
- [ListBackupSchedulesRequestContent](docs/Model/ListBackupSchedulesRequestContent.md)
- [ListBackupSchedulesResponseContent](docs/Model/ListBackupSchedulesResponseContent.md)
- [ListBackupsRequestContent](docs/Model/ListBackupsRequestContent.md)
- [ListBackupsResponseContent](docs/Model/ListBackupsResponseContent.md)
- [ListFirewallRulesRequestContent](docs/Model/ListFirewallRulesRequestContent.md)
- [ListFirewallRulesResponseContent](docs/Model/ListFirewallRulesResponseContent.md)
- [ListIsosRequestContent](docs/Model/ListIsosRequestContent.md)
- [ListIsosResponseContent](docs/Model/ListIsosResponseContent.md)
- [ListIsosResponseData](docs/Model/ListIsosResponseData.md)
- [ListNotificationsRequestContent](docs/Model/ListNotificationsRequestContent.md)
- [ListNotificationsResponseContent](docs/Model/ListNotificationsResponseContent.md)
- [ListOrdersResponseContent](docs/Model/ListOrdersResponseContent.md)
- [ListOrdersResponseData](docs/Model/ListOrdersResponseData.md)
- [ListPowerTasksRequestContent](docs/Model/ListPowerTasksRequestContent.md)
- [ListPowerTasksResponseContent](docs/Model/ListPowerTasksResponseContent.md)
- [ListRdnsRecordsResponseContent](docs/Model/ListRdnsRecordsResponseContent.md)
- [ListRdnsResponseData](docs/Model/ListRdnsResponseData.md)
- [ListReinstallOsRequestContent](docs/Model/ListReinstallOsRequestContent.md)
- [ListReinstallOsResponseContent](docs/Model/ListReinstallOsResponseContent.md)
- [ListReinstallOsResponseData](docs/Model/ListReinstallOsResponseData.md)
- [ListSnapshotsRequestContent](docs/Model/ListSnapshotsRequestContent.md)
- [ListSnapshotsResponseContent](docs/Model/ListSnapshotsResponseContent.md)
- [ListVpsServicesData](docs/Model/ListVpsServicesData.md)
- [ListVpsServicesResponseContent](docs/Model/ListVpsServicesResponseContent.md)
- [MountIsoRequestContent](docs/Model/MountIsoRequestContent.md)
- [MountIsoResponseContent](docs/Model/MountIsoResponseContent.md)
- [MoveFirewallRuleRequestContent](docs/Model/MoveFirewallRuleRequestContent.md)
- [MoveFirewallRuleResponseContent](docs/Model/MoveFirewallRuleResponseContent.md)
- [NoVncConsoleDetails](docs/Model/NoVncConsoleDetails.md)
- [NoVncConsoleResponseData](docs/Model/NoVncConsoleResponseData.md)
- [Notification](docs/Model/Notification.md)
- [NotificationCreateResponseData](docs/Model/NotificationCreateResponseData.md)
- [NotificationDialogRules](docs/Model/NotificationDialogRules.md)
- [NotificationListResponseData](docs/Model/NotificationListResponseData.md)
- [NotificationStatus](docs/Model/NotificationStatus.md)
- [OperationStatus](docs/Model/OperationStatus.md)
- [Order](docs/Model/Order.md)
- [OrderLastAttempt](docs/Model/OrderLastAttempt.md)
- [OrderWarning](docs/Model/OrderWarning.md)
- [PaymentError](docs/Model/PaymentError.md)
- [PaymentStatus](docs/Model/PaymentStatus.md)
- [PowerTask](docs/Model/PowerTask.md)
- [PowerTaskAction](docs/Model/PowerTaskAction.md)
- [PowerTaskCreateResponseData](docs/Model/PowerTaskCreateResponseData.md)
- [PowerTaskDialogRules](docs/Model/PowerTaskDialogRules.md)
- [PowerTaskJobType](docs/Model/PowerTaskJobType.md)
- [PowerTaskListResponseData](docs/Model/PowerTaskListResponseData.md)
- [PublicSshKeyResponseData](docs/Model/PublicSshKeyResponseData.md)
- [RdnsAvailableItem](docs/Model/RdnsAvailableItem.md)
- [RdnsPool](docs/Model/RdnsPool.md)
- [RdnsRecord](docs/Model/RdnsRecord.md)
- [RebootVpsRequestContent](docs/Model/RebootVpsRequestContent.md)
- [RebootVpsResponseContent](docs/Model/RebootVpsResponseContent.md)
- [ResourceNotFoundErrorResponseContent](docs/Model/ResourceNotFoundErrorResponseContent.md)
- [RestoreBackupRequestContent](docs/Model/RestoreBackupRequestContent.md)
- [RestoreBackupResponseContent](docs/Model/RestoreBackupResponseContent.md)
- [RetryPaymentRequestContent](docs/Model/RetryPaymentRequestContent.md)
- [RetryPaymentResponseContent](docs/Model/RetryPaymentResponseContent.md)
- [RetryPaymentResponseData](docs/Model/RetryPaymentResponseData.md)
- [RetryPaymentTotal](docs/Model/RetryPaymentTotal.md)
- [RollbackSnapshotRequestContent](docs/Model/RollbackSnapshotRequestContent.md)
- [RollbackSnapshotResponseContent](docs/Model/RollbackSnapshotResponseContent.md)
- [ServiceBackupsResponseData](docs/Model/ServiceBackupsResponseData.md)
- [ServiceSnapshotsResponseData](docs/Model/ServiceSnapshotsResponseData.md)
- [ServiceUnavailableErrorResponseContent](docs/Model/ServiceUnavailableErrorResponseContent.md)
- [ShutdownVpsRequestContent](docs/Model/ShutdownVpsRequestContent.md)
- [ShutdownVpsResponseContent](docs/Model/ShutdownVpsResponseContent.md)
- [SnapshotCreateResponseData](docs/Model/SnapshotCreateResponseData.md)
- [SnapshotItem](docs/Model/SnapshotItem.md)
- [SshKeyDetails](docs/Model/SshKeyDetails.md)
- [StartVpsRequestContent](docs/Model/StartVpsRequestContent.md)
- [StartVpsResponseContent](docs/Model/StartVpsResponseContent.md)
- [StopVpsRequestContent](docs/Model/StopVpsRequestContent.md)
- [StopVpsResponseContent](docs/Model/StopVpsResponseContent.md)
- [TooManyRequestsErrorResponseContent](docs/Model/TooManyRequestsErrorResponseContent.md)
- [TriggerReinstallRequestContent](docs/Model/TriggerReinstallRequestContent.md)
- [TriggerReinstallResponseContent](docs/Model/TriggerReinstallResponseContent.md)
- [TriggerReinstallResponseData](docs/Model/TriggerReinstallResponseData.md)
- [UnauthorizedErrorResponseContent](docs/Model/UnauthorizedErrorResponseContent.md)
- [UpdateFirewallRuleRequestContent](docs/Model/UpdateFirewallRuleRequestContent.md)
- [UpdateFirewallRuleResponseContent](docs/Model/UpdateFirewallRuleResponseContent.md)
- [UpdateNotificationRequestContent](docs/Model/UpdateNotificationRequestContent.md)
- [UpdateNotificationResponseContent](docs/Model/UpdateNotificationResponseContent.md)
- [UpdatePowerTaskRequestContent](docs/Model/UpdatePowerTaskRequestContent.md)
- [UpdatePowerTaskResponseContent](docs/Model/UpdatePowerTaskResponseContent.md)
- [UpdateSnapshotRequestContent](docs/Model/UpdateSnapshotRequestContent.md)
- [UpdateSnapshotResponseContent](docs/Model/UpdateSnapshotResponseContent.md)
- [UpdateSshKeysRequestContent](docs/Model/UpdateSshKeysRequestContent.md)
- [UpdateSshKeysResponseContent](docs/Model/UpdateSshKeysResponseContent.md)
- [UpdateVpsConfigRequestContent](docs/Model/UpdateVpsConfigRequestContent.md)
- [UpdateVpsConfigResponseContent](docs/Model/UpdateVpsConfigResponseContent.md)
- [UserChangePasswordDetails](docs/Model/UserChangePasswordDetails.md)
- [UserChangePasswordRequestContent](docs/Model/UserChangePasswordRequestContent.md)
- [UserChangePasswordResponseContent](docs/Model/UserChangePasswordResponseContent.md)
- [UserChangePasswordResponseData](docs/Model/UserChangePasswordResponseData.md)
- [ValidatePricingBase](docs/Model/ValidatePricingBase.md)
- [ValidatePricingBreakdown](docs/Model/ValidatePricingBreakdown.md)
- [ValidatePricingConfigItem](docs/Model/ValidatePricingConfigItem.md)
- [ValidatePricingCurrency](docs/Model/ValidatePricingCurrency.md)
- [ValidatePricingDiscount](docs/Model/ValidatePricingDiscount.md)
- [ValidatePricingPlanConfig](docs/Model/ValidatePricingPlanConfig.md)
- [ValidatePricingPlanPricing](docs/Model/ValidatePricingPlanPricing.md)
- [ValidatePricingPriceRange](docs/Model/ValidatePricingPriceRange.md)
- [ValidatePricingProduct](docs/Model/ValidatePricingProduct.md)
- [ValidatePricingProductResult](docs/Model/ValidatePricingProductResult.md)
- [ValidatePricingProrata](docs/Model/ValidatePricingProrata.md)
- [ValidatePricingRequestContent](docs/Model/ValidatePricingRequestContent.md)
- [ValidatePricingResponseContent](docs/Model/ValidatePricingResponseContent.md)
- [ValidatePricingResponseData](docs/Model/ValidatePricingResponseData.md)
- [ValidatePricingSummary](docs/Model/ValidatePricingSummary.md)
- [ValidatePricingSummaryRecurring](docs/Model/ValidatePricingSummaryRecurring.md)
- [ValidationErrorResponseContent](docs/Model/ValidationErrorResponseContent.md)
- [VpsAvailableFeatures](docs/Model/VpsAvailableFeatures.md)
- [VpsBandwidthInfo](docs/Model/VpsBandwidthInfo.md)
- [VpsCancelResponseData](docs/Model/VpsCancelResponseData.md)
- [VpsCancelType](docs/Model/VpsCancelType.md)
- [VpsConfigResponseData](docs/Model/VpsConfigResponseData.md)
- [VpsCpuInfo](docs/Model/VpsCpuInfo.md)
- [VpsCredentials](docs/Model/VpsCredentials.md)
- [VpsDetailsResponse](docs/Model/VpsDetailsResponse.md)
- [VpsDiskInfo](docs/Model/VpsDiskInfo.md)
- [VpsMemoryInfo](docs/Model/VpsMemoryInfo.md)
- [VpsNetworkRate](docs/Model/VpsNetworkRate.md)
- [VpsOsInfo](docs/Model/VpsOsInfo.md)
- [VpsServiceInfo](docs/Model/VpsServiceInfo.md)
- [VpsSimpleActionResponseData](docs/Model/VpsSimpleActionResponseData.md)
- [VpsVmInfo](docs/Model/VpsVmInfo.md)

## Authorization

Authentication schemes defined for the API:
### smithy.api.httpBearerAuth

- **Type**: Bearer authentication

### BearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2026-01-01`
    - Generator version: `7.20.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
