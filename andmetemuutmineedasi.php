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

if ($_REQUEST[enter]=="Muuda")
{

    echo "Andmed muudetud";
    include("uhendus.php");
    mysql_query( "SET NAMES utf8" );

    $abi3="UPDATE teosed SET helilooja='$_GET[helilooja]', teosenimi='$_GET[teosenimi]', tyyp='$_GET[tyyp]', dirigent='$_GET[dirigent]', orkester='$_GET[orkester]' where id='$_GET[id]'";

    mysql_query($abi3)or die(mysql_error());

}



$tu="select * from teosed where id='$_GET[plaat]';";

$tulemus=mysql_query($tu)or die (mysql_error());

while ($rida=mysql_fetch_array($tulemus))
{

    echo "<form action=andmetemuutmineedasi.php method=GET>";

    echo "<b>Järjekorra number:</b>".$rida["id"]. "<br>\n";

    echo "<br>";

    echo "<input type=hidden name=\"id\" value=$rida[id]>";

    echo "<b>Helilooja: </b>".$helilooja;

    echo "<input type=text name=\"helilooja\" value=\"$rida[helilooja]\">";
    echo "<br>";

    echo "<b>Teose nimi: </b>".$teosenimi;

    echo "<input type=text name=\"teosenimi\" value=\"$rida[teosenimi]\">";





    echo "<br>";

    echo "<b>Teose tüüp:</b>".$tyyp;

    echo '<SELECT NAME="tyyp">

 

<OPTION '.(($rida[tyyp]=="Sümfoonia")? "selected='selected' ":"").' value="Sümfoonia">Sümfoonia</OPTION>

<OPTION '.(($rida[tyyp]=="Instrumentaalkontsert")? "selected='selected'":"").' value="Instrumentaalkontsert">Instrumentaalkontsert</OPTION>

<OPTION '.(($rida[tyyp]=="Avamäng")? "selected='selected'":"").' value="Avamäng">Avamäng</OPTION>

</SELECT>';

    echo "<br>";

    echo "<input type=text name=\"dirigent\" value=\"$rida[dirigent]\">";
    echo "<br>";
    echo "<input type=text name=\"orkester\" value=\"$rida[orkester]\">";
    echo "<br>";
    echo "<br>";

    echo 		"<INPUT NAME=enter TYPE=submit VALUE=Muuda><br><br>";
    echo			"</form>";
}
?>

</body>
</html>
