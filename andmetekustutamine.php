<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administraatorile</title>
    <link rel="stylesheet" type="text/css" href="kujundus.css" />
</head>
<body>

<?php
include "uhendus.php";

mysql_query( "SET NAMES utf8" );

if ($_REQUEST[submit]=="Kustuta" && is_array($_GET[box1]))

    echo "Andmed edukalt kustutatud";

{

    while (list($key,$value)=each($_GET[box1]))

    {

        $q="delete from teosed where id='$value'";

        mysql_query($q);

    }

}

$tul = mysql_query("select * from teosed");

if ($tul) {

    echo "<form action=\"andmetekustutamine.php\" method=GET>";

    while ($row = mysql_fetch_array($tul)) {

        echo "<b>Helilooja:</b>" . $row["helilooja"] . "<br>";

        echo "<b>Teose nimi:</b>" . $row["teosenimi"] . "<br>";

        echo "<b>Tüüp:</b>" . $row["tyyp"] . "<br>";

        echo "<b>Dirigent:</b>" . $row["dirigent"] . "<br>";

        echo "<b>Orkester:</b>" . $row["orkester"] . "<br>";

        echo "<b>Plaat:</b>" . $row["plaat"] . "<br>";

        echo "<input type=checkbox name=box1[] value=\"" . $row["id"] . "\">";

        echo "Märgi antud kirje kustutamiseks <br>\n<br>\n<br>\n ";

    }

    echo "<input type=submit name=submit value=Kustuta>";

    echo "</form>";

    mysql_free_result($tul);
}
?>

</body>
</html>