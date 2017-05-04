<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plaadi otsimine</title>
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
<?php

include ("uhendus.php");
$orkestrid="select orkester from teosed GROUP BY orkester";
$result = mysql_query($orkestrid) or die(mysql_error());
echo "<table class='sisestamine'><tr><td>Orkestrid:</td></tr><tr></tr>";
    while($row = mysql_fetch_assoc($result))
    {
    echo "<tr>";
        echo "<td>" . $row['orkester'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
</div>
</body>
</html>