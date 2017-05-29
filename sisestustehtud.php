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
            <li><a href="rakenduseavaleht.html">Avalehele</a></li>
            <li><a href="administraatorile.php">Administraatorile</a></li>
            <li><a href="sisestus.html">Sisesta uus</a></li>
            <li><a href="otsing.html">Otsi</a></li>


        </ul>
    </nav>
</div>
<?php
header('charset=utf-8');

echo "<script type='text/javascript'>alert('Andmed edukalt lisatud!')</script>";
include("uhendus.php");

$id = htmlspecialchars($_POST[id]);
$helilooja = htmlspecialchars($_POST[helilooja]);
$teosenimi = htmlspecialchars($_POST[teosenimi]);
$dirigent = htmlspecialchars($_POST[dirigent]);
$orkester = htmlspecialchars($_POST[orkester]);
$plaat = htmlspecialchars($_POST[plaat]);
if (htmlspecialchars($_POST[tyyp]=="symf"))
{
    $teos = "Sümfoonia";
}
else if (htmlspecialchars($_POST[tyyp]=="kontsert"))
{
    $teos = "Instrumentaalkontsert";
}
else if (htmlspecialchars($_POST[tyyp]=="ava"))
{
    $teos = "Avamäng";
}


$abi6="INSERT INTO teosed (id,helilooja, teosenimi, tyyp, dirigent, orkester, plaat) VALUES 
('$id','$helilooja','$teosenimi','$teos','$dirigent','$orkester','$plaat')";


mysql_query($abi6);

?>
<br>

</body>
</html>

