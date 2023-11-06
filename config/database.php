<?php

//Define database connection variables
$db_Host = "localhost";
$db_UserName = "corephpblog";
$db_HostName = "root";
$db_Password = "";

//Connect to the database

$databaseConnection = mysqli_connect($db_Host, $db_HostName, $db_Password, $db_UserName);

//check if connection succeeds
if (!$databaseConnection) {
	die('Connection To The Database Failed' . mysqli_connect_error());
}