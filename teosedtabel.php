<?php
include("uhendus.php");

$abi2="CREATE TABLE teosed 

(
id			integer not null auto_increment, 
helilooja  		varchar(50) null,  
teosenimi  		varchar(50) null,  
tyyp 		varchar(50) null,    
dirigent	    varchar(50) null,  
orkester    varchar(50) null,  
plaat       varchar(50) null,  
		  
	
 
key voti(id) 
)";
mysql_query($abi2) or die(mysql_error());

?>