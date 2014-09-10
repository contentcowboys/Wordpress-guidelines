<?php

/**
 * The base configurations of the WordPress.
 *
 * This file is created to use as an guideline for setting up an
 * Wordpress project.
 *
 * @author      Vincent Peters <me@vincentpeters.be>
 * @package     Wordpress-guidelines
 * @link        https://github.com/contentcowboys/Wordpress-guidelines
 */

/**-------------------------------------------------------------------------
 * Variables
 * -------------------------------------------------------------------------
 */

/**
 * The main domain of your project
 * Don't prefix it with http:// or www.
 * example: domain.com
 */
$domain = "domain.com";
/**
 * WordPress Database Table prefix.
 * using the none default is more secure and encouraged
 */
$table_prefix = 'cwpc_';

/**-------------------------------------------------------------------------
 * Environment switching
 * -------------------------------------------------------------------------
 */
switch ($_SERVER['HTTP_HOST']) {
case "staging." . $domain: // http:/staging.domain.com
    define('WP_ENV', 'staging');
    break;
case $domain: // http://domain.com
    define('WP_ENV', 'production');
    break;
case "www." . $domain: // http://www.domain.com
    define('WP_ENV', 'production');
    break;
default: // All other domains.
    define('WP_ENV', 'development');
    break;
}

switch (WP_ENV) {
case 'development':
    /*
    * Enable the display of notices during development.
    */
    define('WP_DEBUG', true);
    define( 'WP_DEBUG_LOG', true );
    ini_set('display_errors', 'on');
    ini_set('display_startup_errors', 'on');
    ini_set('error_reporting', '-1');
    ini_set('log_errors', 'on');
    /*
     * Disable wordpress internally 'cron' system
     */
    define('DISABLE_WP_CRON', true);
    /*
     * Increase the memory limit
     *
     */
    define('WP_MEMORY_LIMIT', '64M');
    ini_set('memory_limit', '64M');
    define('FS_METHOD', 'direct');
    /**
     * Database & Url settings
     */
    define('DB_NAME', '');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
    define('WP_SITEURL', "http://dev." . $domain);
    define('WP_HOME', "http://dev." . $domain);
    break;
case 'staging':
    /*
   * disable the display of notices on live servers, for security reasons.
   * But log them
   */
    define('WP_DEBUG', false);
    define( 'WP_DEBUG_LOG', true );
    ini_set('display_errors', 'Off');
    ini_set('display_startup_errors', 'Off');
    ini_set('error_reporting', 'E_ALL');
    ini_set('log_errors', 'On');
    /*
    * Disable wordpress internally 'cron' system
    */
    define('DISABLE_WP_CRON', true);
    /**
     * Database & Url settings
     */
    define('DB_NAME', '');
    define('DB_USER', '');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
    define('WP_SITEURL', "http://staging." . $domain);
    define('WP_HOME', "http://staging." . $domain);
    break;
case 'production':
    /*
  * disable the display of notices on live servers, for security reasons.
  * But log them
  */
    define('WP_DEBUG', false);
    define( 'WP_DEBUG_LOG', true );
    ini_set('display_errors', 'Off');
    ini_set('display_startup_errors', 'Off');
    ini_set('error_reporting', 'E_ALL');
    ini_set('log_errors', 'On');
    /**
     * Database & Url settings
     */
    define('DB_NAME', 'maes_website2014');
    define('DB_USER', 'maes_maes');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
    define('WP_SITEURL', "http://" . $domain);
    define('WP_HOME', "http://" . $domain);
    break;
}

/**
 * Some default basic database encoding
 */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * Copy themen from wp-config.generated.php or generate new ones at
 * https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY', '');
define('SECURE_AUTH_KEY', '');
define('LOGGED_IN_KEY', '');
define('NONCE_KEY', '');
define('AUTH_SALT', '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT', '');
define('NONCE_SALT', '');

/**#@-*/

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 *
 * Most used language codes by our agency
 * Dutch:       NL_nl
 * French:      FR_fr
 * English:     en_GB
 */
define('WPLANG', 'en_GB');

/**-------------------------------------------------------------------------
 * Some extra parameters, if you don't know what they do, don't change them!
 * -------------------------------------------------------------------------
 */

/**
 * Limit the amount of revisions, or completely disable revisions
 */
//define('WP_POST_REVISIONS', 3); // any integer, but don't go crazy
//define('WP_POST_REVISIONS', false); // kill the bloat

/*
 * Define the interval in seconds when to auto save drafts of posts
 */
//define('AUTOSAVE_INTERVAL', 160);

/*
 * Define how long trash is kept before it permanently deletes it (in days)
 * Or disable it by setting it to 0
 */
//define('EMPTY_TRASH_DAYS', 30);
//define('EMPTY_TRASH_DAYS', 0);

/*
 * Set access to the Database repair page
 * Set to true and go to http://www.yoursite.com/wp-admin/maint/repair.php
 */
//define('WP_ALLOW_REPAIR', true);

/**-------------------------------------------------------------------------
 * That's all, stop editing! Happy blogging.
 * -------------------------------------------------------------------------
 */
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');