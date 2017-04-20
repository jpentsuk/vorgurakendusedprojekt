<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administraatorile</title>
    <link rel="stylesheet" type="text/css" href="kujundus.css" />
</head>
<body>




<?php

include("uhendus.php");

mysql_query( "SET NAMES utf8" );

$plaadid = "SELECT * FROM teosed";

$tulemus = mysql_query($plaadid) or die(mysql_error());

while($row = mysql_fetch_assoc($tulemus))

{

    $plaadid .= "<option value='{$row['id']}'.{$row['plaat']}'>{$row['plaat']} </option>";

}

?>

Vali plaat, mille andmeid soovid muuta:
<br>
<form method="GET" action="andmetemuutmineedasi.php">
    <select name="plaat"><? echo $plaadid; ?></select>
    <INPUT NAME="enter" TYPE="submit" VALUE="Edasi"><br><br>
</form>

</body>
</html>
