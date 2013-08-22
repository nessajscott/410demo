
<?php
//sitewide configuration data here 
// set local timezone
putenv('TZ=US/Eastern');


//create D8 constants
define ('HOST','localhost');
define ('DBNAME','nessasco_imd410');
define ('USER','nessa_410');
define ('PASS','allmine92');




//connect to db
$db= new mysqli(HOST,USER,PASS,DBNAME);

if(mysqli_connect_errno())
{
	echo 'Error:Could not connect to the database';
	exit();
}
?>