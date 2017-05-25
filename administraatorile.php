<?php

// sessiooni loomisel on kasutatud õpetust lehelt:
// http://www.w3tweaks.com/php/simple-php-login-and-logout-script-using-php-session-and-database-using-mysql.html
if (isset($_POST['submit']))
{
    include("uhendus.php");
    session_start();
    $username=htmlspecialchars($_POST['username']);
    $password=htmlspecialchars($_POST['password']);
    $_SESSION['login_user']=$username;
    $query = mysql_query("SELECT username FROM adminn WHERE username='$username' and password='$password'");
    if (mysql_num_rows($query) != 0)
    {
        echo "<script language='javascript' type='text/javascript'> location.href='adminsees.php' </script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Vale kasutajanimi või parool!')</script>";
    }
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
    <form method="post" action="administraatorile.php">
    <table class="sisestamine">

    <tr>
        <th>Sisesta kasutajanimi ja parool</th>
        <th></th>
    </tr>
    <tr>
        <td>Kasutajanimi<input type="text" name="username"></td>
        <td>Parool<input type="password" name="password"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Logi sisse"></td>
    </tr>

    </table>
</form>
</div>
<br>

</body>
</html>