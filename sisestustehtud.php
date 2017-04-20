<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plaatide sisestamine andmebaasi</title>
    <link rel="stylesheet" type="text/css" href="kujundus.css" />
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href="administraatorile.php">Administraatorile</a></li>
            <li><a href="sisestus.html">Sisesta uus</a></li>
            <li><a href="otsing.html">Otsi</a></li>


        </ul>
    </nav>
</div>
<?php
header('charset=utf-8');

echo "lisatud";
include("uhendus.php");

if ($_POST[tyyp]=="symf")
{
    $teos = "Sümfoonia";
}
else if ($_POST[tyyp]=="kontsert")
{
    $teos = "Instrumentaalkontsert";
}
else if ($_POST[tyyp]=="ava")
{
    $teos = "Avamäng";
}

#Need on tabeli väljad esimeses reas ja teises reas on vormiväljad
$abi6="insert into teosed (id,helilooja, teosenimi, tyyp, dirigent, orkester, plaat) values 
('$_POST[id]','$_POST[helilooja]','$_POST[teosenimi]','$teos','$_POST[dirigent]','$_POST[orkester]','$_POST[plaat]')";
//Lisame tabelisse inimesed kasutaja sisestatud väärtused.

mysql_query($abi6);
// Käivitame lisamislause
?>
<br>
<a href="rakenduseavaleht.html">Avalehele</a>
</body>
</html>

