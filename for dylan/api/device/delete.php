<?php
// include the configs / constants for the database connection
require_once("../../config/db.php");

// load the login class
require_once("../../classes/Device.php");

$device = new Device();
$device->deleteDevice();
?>
