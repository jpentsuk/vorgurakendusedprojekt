<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administraatorile</title>
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
include "uhendus.php";

mysql_query( "SET NAMES utf8" );

if ($_REQUEST[submit]=="Kustuta" && is_array($_GET[box1]))

    echo "<script type='text/javascript'>alert('Andmed edukalt kustutatud!')</script>";

{

    while (list($key,$value)=each($_GET[box1]))

    {

        $q="delete from teosed where id='$value'";

        mysql_query($q);

    }

}

$tul = mysql_query("select * from teosed");

if ($tul) {

    echo "<div id='sisestused'>";
    echo "<table class='sisestamine'>";
    echo "<form action=\"andmetekustutamine.php\" method=GET>";

    while ($row = mysql_fetch_array($tul)) {

        echo "<tr><td>Helilooja:</td><td>" . $row["helilooja"] . "</td></tr>";

        echo "<tr><td>Teose nimi:</td><td>" . $row["teosenimi"] . "</td></tr>";

        echo "<tr><td>Tüüp:</td><td>" . $row["tyyp"] . "</td></tr>";

        echo "<tr><td>Dirigent:</td><td>" . $row["dirigent"] . "</td></tr>";

        echo "<tr><td>Orkester:</td><td>" . $row["orkester"] . "</td></tr>";

        echo "<tr><td>Plaat:</td><td>" . $row["plaat"] . "</td></tr>";

        echo "<tr><td><input type=checkbox name=box1[] value=\"" . $row["id"] . "\">Märgi antud kirje kustutamiseks</td></tr>";

    }

    echo "<tr><td><input type=submit name=submit value=Kustuta></td></tr>";

    echo "</form>";
    echo "</table>";

    mysql_free_result($tul);
}
?>

</body>
</html>