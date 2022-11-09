<?php
$dbh=mysqli_connect("localhost", "webshop", 'AkJ3342198873!#1337*C0D3;', "webshop");
if (mysqli_connect_errno())
{
    echo "Keine Verbindung zur Datenbank möglich";
}
else
{
    echo "Verbindung erfolgreich hergestellt.";
}
mysqli_close($dbh);
echo '<h1>hello</h1>';
