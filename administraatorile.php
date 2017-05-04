<?php


if($_REQUEST['submit']=="Logi sisse" && $_POST['kasutajanimi']=="admin" && $_POST['parool']=="parool") {

    header("Location: adminsees.php");
}

?>
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
<br><br>
<div id="sisestused">
    <table class="sisestamine">
<form method="post" action="administraatorile.php">
    <tr>
        <th>Sisesta kasutajanimi ja parool</th>
    </tr>
    <tr>
        <td>Kasutajanimi<input type="text" name="kasutajanimi"></td>
        <td>Parool<input type="password" name="parool"></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Logi sisse"></td>
    </tr>

    </table>
</form>
</div>
<br>

</body>
</html>