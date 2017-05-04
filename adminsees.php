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
<div id="sisestused">
    <table class="sisestamine">
        <tr>
            <th><?php echo "Tere administraator!"; ?></th>
        </tr>
        <tr>
            <td>Muuda andmeid <a href="andmetemuutmine.php">siin!</a></td>
        </tr>
        <tr>
            <td>Kustuta andmeid <a href="andmetekustutamine.php">siin!</a></td>
        </tr>
        <tr>
            <td>Logi välja <a href="rakenduseavaleht.html">siit!</a></td>
        </tr>
    </table>
</div>
</body>
</html>