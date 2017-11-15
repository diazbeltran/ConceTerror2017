<?php
$hostname="localhost"; //local server name default localhost
$username="teragonc_INGRESO";  //mysql username default is root.
$password="registro123";       //blank if no password is set for mysql.
$database="teragonc_desarrollo";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}
mysql_select_db($database,$con);
?>