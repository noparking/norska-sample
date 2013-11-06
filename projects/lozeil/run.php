<?php
/* Norska -- Copyright (C) No Parking 2013 - 2013 */

$config = array();
require dirname(__FILE__)."/cfg/config.cfg.php";
$config_project = $config;
unset($config);

foreach (glob($config_project['parameters']['path']."tests/unit/*.test.php") as $filename) {
	require $filename;
}
