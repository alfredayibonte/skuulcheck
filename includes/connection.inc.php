<?php
$username = "root";
$password ="";
$server = "localhost";
$db = "skuulcheck";
if (@mysql_connect($server,$username,$password)) 
{
	@mysql_select_db($db)) or die("server is down");
	
	
}
else
{
	die("server down") ;
}
?>
