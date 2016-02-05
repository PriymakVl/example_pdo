<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
                             
//PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING 
//PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//PDO::MYSQL_ATTR_INIT_COMMAND => SET NAMES \'UTF8\'
//PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

$db_options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);                          

 $pdo = new PDO('mysql:host=localhost; dbname=english; charset=utf8', 'root', '', $db_options);


// try {
// 	$pdo = new PDO('mysql:host=localhost; dbname=english', 'root', '', $db_options);	
// }
// catch (PDOException $e) {
// 	 $e->getMessage();
// }