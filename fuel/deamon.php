<?php

require_once 'System/Daemon.php';

$appName = $argv[2];
$options = array(
	'appName'		  => $appName,
	'appDir'		  => dirname(__FILE__),
	"logLocation"	  => "/root/" . $appName . ".log",
	//'appRunAsUID' => 501,
	//'appRunAsGID' => 501,
);
System_Daemon::setOptions($options);
System_Daemon::start();
while (!System_Daemon::isDying()) {
    //log出力 場所は /var/log/デーモン名.log
    System_Daemon::log(System_Daemon::LOG_INFO, date('Y/m/d H:i:s'));
    //ここに処理を書く
    System_Daemon::iterate(1); //sleep
	system($argv[1]);
}
System_Daemon::stop();

