<?php
/**
 * Configuration overrides for WP_ENV === 'staging'
 */

use Roots\WPConfig\Config;
Config::define('WP_HOME', 'https://auto-deploy-wordpress-gbz22.ondigitalocean.app');
Config::define('WP_SITEURL', 'https://auto-deploy-wordpress-gbz22.ondigitalocean.app/wp');
/**
 * You should try to keep staging as close to production as possible. However,
 * should you need to, you can always override production configuration values
 * with `Config::define`.
 *
 * Example: `Config::define('WP_DEBUG', true);`
 * Example: `Config::define('DISALLOW_FILE_MODS', false);`
 */
