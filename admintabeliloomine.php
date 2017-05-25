<?php
include("uhendus.php");
//Võtame külge faili, mis loob ühenduse serveriga ja valitud andmebaasiga
$abi2="create table adminn

(
id			integer not null auto_increment, 
username  		varchar(50) null,  
password 		varchar(50) null,  

		  
	
 
key voti(id) 
)";
mysql_query($abi2) or die(mysql_error());

?>