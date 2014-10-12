<?php
$dbHost="db547522629.db.1and1.com";
$dbName="db547522629";
$dbUser="dbo547522629";
$dbPassword="Paypal123";

mysql_connect($dbHost,$dbUser,$dbPassword)
or die(mysql_error());
mysql_select_db($dbName)
or die(mysql_error());
?>