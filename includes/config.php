
<?php
//sitewide configuration data here 
// set local timezone
putenv('TZ=US/Eastern');


//create D8 constants
define ('HOST',    'Localhost');
define ('DBNAME',    'scottvj_cms');
define ('USER',    'scottvj_nessa');
define ('PASS',    'allmine92');




//connect to db
$db= new mysqli(HOST,USER,PASS,DBNAME);

if(mysqli_connect_errno())
{
	echo 'Error:Could noet connect to the database';
	exit();
?>