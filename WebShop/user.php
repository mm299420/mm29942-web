<?php
$servername = "localhost";
$username = "webshop";
$password = "AkJ3342198873!#1337*C0D3;";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<p>Connected successfully</p>";
//$dbh=mysqli_connect("116.202.173.113", "webshop", 'AkJ3342198873!#1337*C0D3;', "webshop");*/
//$dbh = new PDO ("mysql:dbname=webshop; host=localhost, port=3306","webshop", "AkJ3342198873!#1337*C0D3;");
//echo "Verbindung erfolgreich hergestellt.";
//mysqli_close($conn);

/*echo "<p>test</p>";
$connection = ssh2_connect('116.202.173.113', 22);
ssh2_auth_password($connection, 'webshop', 'AkJ3342198873!#1337*$C0D3;');
$tunnel = ssh2_tunnel($connection, '116.202.173.113', 3307);
$dbh=mysqli_connect("localhost", "webshop", 'AkJ3342198873!#1337*C0D3;', "webshop");
if (mysqli_connect_errno())
{
    echo "Keine Verbindung zur Datenbank möglich";
}
else
{
    echo "Verbindung erfolgreich hergestellt.";
}
mysqli_close($dbh);*/
?>

//system("ssh ");
//system("mysql --host=127.0.0.1 --port=3306 -u webshop -p AkJ3342198873!#1337*C0D3;");
//ssh2_auth_password($connection, 'webshop', 'AkJ3342198873!#1337*$C0D3;');
