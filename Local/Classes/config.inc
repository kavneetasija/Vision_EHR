<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-04-28
 * Time: 10:09 AM
 */
?>
<?php
//Software details
define('VERSION') ? null : define("VERSION","(v.1.1.0)");
define('NAME') ? null : define("NAME","Vision EHR");

// Database connection parameters
//Hosting server name or IP Address
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
//Database User name
defined('DB_USER')   ? null : define("DB_USER", "root");
//Database Password
defined('DB_PASS')   ? null : define("DB_PASS", "dp1991dp");
//Database Name
defined('DB_NAME')   ? null : define("DB_NAME", "vision_ehr");

// Set default time zone
date_default_timezone_set("America/Toronto");
?>