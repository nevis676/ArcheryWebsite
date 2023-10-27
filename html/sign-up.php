<html>
    <body>

<?php

$servername = "localhost";
$username = "student";
$password = "password";
$dbname = "archeryscorekeep";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO users (FirstNames, LastNames, Email, Password)
VALUES ('Nevis', 'Spiers', 'nevis676@gmail.com', 'secretpassword')";

$conn -> close();
?>

    </body>
</html>