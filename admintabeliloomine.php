<?php
include("uhendus.php");

$abi2="CREATE TABLE adminn

(
id			integer not null auto_increment, 
username  		varchar(50) null,  
password 		varchar(50) null,  

		  
	
 
key voti(id) 
)";
mysql_query($abi2) or die(mysql_error());

?>