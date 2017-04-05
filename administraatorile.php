<?php


if($_REQUEST[submit]=="Logi sisse" && $_POST[kasutajanimi]=="admin" && $_POST[parool]=="parool") {

    header("Location: adminsees.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administraatorile</title>
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

<form method="post" action="administraatorile.php">
    Sisesta kasutajanimi ja parool
    <br>
    Kasutajanimi<input type="text" name="kasutajanimi">
    Parool<input type="password" name="parool">
    <br>

    <input type="submit" name="submit" value="Logi sisse">

</form>
<br>
<a href="rakenduseavaleht.html">Avalehele</a>

</body>
</html>