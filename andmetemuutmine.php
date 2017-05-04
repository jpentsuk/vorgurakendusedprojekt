<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plaadikogu andmebaas</title>
    <script src="sisestusskript.js"></script>
    <link rel="stylesheet" type="text/css" href="kujundus.css" />
</head>
<body>

<div>
    <nav>
        <ul>
            <li><a href="rakenduseavaleht.html">Avalehele</a></li>
            <li><a href="administraatorile.php">Administraatorile</a></li>
            <li><a href="sisestus.html">Sisesta uus</a></li>
            <li><a href="otsing.html">Otsi</a></li>
        </ul>
    </nav>
</div>
<br>




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
<div id="sisestused">


<form method="GET" action="andmetemuutmineedasi.php">
    <table class="sisestamine">
        <tr>
            <th>Vali plaat, mille andmeid soovid muuta:</th>
        </tr>
        <tr>
            <td><select name="plaat"><? echo $plaadid; ?></select></td>
        </tr>

        <tr>
            <td><INPUT NAME="enter" TYPE="submit" VALUE="Edasi"></td>
        </tr>

    </table>
</form>
</div>
</body>
</html>
