<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all environments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Skipping permissions hardening will make scaffolding
 * work better, but will also raise a warning when you
 * install Drupal.
 *
 * https://www.drupal.org/project/drupal/issues/3091285
 */
// $settings['skip_permissions_hardening'] = TRUE;

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}

// Make sure contenta_jsonapi configuration is installed.
$is_installer_url = (strpos($_SERVER['SCRIPT_NAME'], '/core/install.php') === 0);
if ($is_installer_url) {
  $settings['config_sync_directory'] = 'profiles/composer/contenta_jsonapi/config/sync';
}

// Issue #3021054: Allow bypassing permissions check on public/private key files
// @see https://www.drupal.org/project/simple_oauth/issues/3021054
$settings['simple_oauth.key_permissions_check'] = FALSE;
