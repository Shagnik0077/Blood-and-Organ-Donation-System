<?php
	$DB_HOST = 'localhost';
	$DB_USER = 'root';
	$DB_PASSWORD = '';
	$DB_DATABASE = 'blood_organ_database';
	
	$DB_CONNECT = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_DATABASE);
	//echo $DB_CONNECT;
	//mysql_select_db($DB_DATABASE,$DB_CONNECT);
?>