<?php
ob_start();
session_start();
error_reporting(0);

// db properties
define('DBHOST','localhost');
define('DBUSER','username');
define('DBPASS','password');
define('DBNAME','databse name');

// make a connection to mysql here
$conn = @mysql_connect (DBHOST, DBUSER, DBPASS);
$conn = @mysql_select_db (DBNAME);
if(!$conn){
	die( "Sorry! There seems to be a problem connecting to our database.");
}

// define site path
define('DIR','http://www.example.com/simple-cms-seo/');

// define admin site path
define('DIRADMIN','http://www.example.com/simple-cms-seo/admin/');

// define site title for top of the browser
define('SITETITLE','Simple CMS');

//define include checker
define('included', 1);

include('functions.php');
?>