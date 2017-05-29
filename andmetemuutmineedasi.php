<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Plaatide sisestamine andmebaasi</title>
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




<?php
include("uhendus.php");

if ($_REQUEST[enter]=="Muuda")
{

    echo "<script type='text/javascript'>alert('Andmed edukalt muudetud!')</script>";

    include("uhendus.php");
    mysql_query( "SET NAMES utf8" );

    $abi3="UPDATE teosed SET helilooja='$_GET[helilooja]', teosenimi='$_GET[teosenimi]', tyyp='$_GET[tyyp]', dirigent='$_GET[dirigent]', orkester='$_GET[orkester]' where id='$_GET[id]'";

    mysql_query($abi3)or die(mysql_error());


}



$tu="SELECT * FROM teosed WHERE id='$_GET[plaat]';";

$tulemus=mysql_query($tu)or die (mysql_error());

while ($rida=mysql_fetch_array($tulemus))
{
    echo "<br>";
    echo "<div id='sisestused'>";
    echo "<form action=andmetemuutmineedasi.php method=GET>";
    echo "<table class='sisestamine'>";

    echo "<input type=hidden name=\"id\" value=$rida[id]>";
    echo "<tr><th>Muuda plaadi andmeid:</th></tr>";

    echo "<tr><td>Helilooja:</td><td>".$helilooja."<input type=text name=\"helilooja\" value=\"$rida[helilooja]\"</td></tr>";


    echo "<tr><td>Teose nimi:</td><td>".$teosenimi."<input type=text name=\"teosenimi\" value=\"$rida[teosenimi]\"</td></tr>";


    echo "<tr><td>Teose tüüp:</td><td>".$tyyp;

    echo '<SELECT NAME="tyyp">

<OPTION '.(($rida[tyyp]=="Sümfoonia")? "selected='selected' ":"").' value="Sümfoonia">Sümfoonia</OPTION>

<OPTION '.(($rida[tyyp]=="Instrumentaalkontsert")? "selected='selected'":"").' value="Instrumentaalkontsert">Instrumentaalkontsert</OPTION>

<OPTION '.(($rida[tyyp]=="Avamäng")? "selected='selected'":"").' value="Avamäng">Avamäng</OPTION>

</SELECT></tr>';

    echo "<tr><td>Dirigent:</td><td><input type=text name=\"dirigent\" value=\"$rida[dirigent]\"</td></tr>";

    echo "<tr><td>Orkester:</td><td><input type=text name=\"orkester\" value=\"$rida[orkester]\"</td></tr>";

    echo "<tr><td><INPUT NAME=enter TYPE=submit VALUE=Muuda></td></tr>";
    echo "</table>";
    echo "</form>";
}
?>

</body>
</html>
