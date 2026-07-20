<?php
// AUTO-GENERATED — do not edit manually.
// Re-run `make sdk-php` (or `make sdk-all`) to update.
// Source of truth: @readonly annotations in hostafrica-api.smithy

namespace HostAfrica\SDK;

class RetryablePaths
{
    /** @var array<string, true> */
    private static array $paths = [
        '/vps/list-vps-services' => true,
        '/vps/get-details' => true,
        '/vps/get-config' => true,
        '/vps/novnc-console' => true,
        '/vps/list-backups' => true,
        '/vps/list-backup-schedules' => true,
        '/vps/list-snapshot-jobs' => true,
        '/vps/list-snapshots' => true,
        '/vps/list-firewall-rules' => true,
        '/vps/list-power-tasks' => true,
        '/vps/list-notifications' => true,
        '/vps/list-isos' => true,
        '/vps/list-reinstall-images' => true,
        '/vps/get-catalogue' => true,
        '/vps/validate-pricing' => true,
        '/vps/list-orders' => true,
        '/dns/list-rdns-records' => true,
        '/domain/check-availability' => true,
        '/domain/suggest' => true,
        '/domain/list-domains' => true,
        '/domain/list-domains-requiring-data' => true,
        '/domain/get-domain' => true,
        '/domain/get-domain-contacts' => true,
    ];

    public static function isRetryable(string $path): bool
    {
        return isset(self::$paths[$path]);
    }
}
