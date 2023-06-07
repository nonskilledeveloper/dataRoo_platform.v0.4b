<?php
$email = $_POST['email'];
$password = $_POST['password'];
$authorization = $_POST['authorization_key'];

$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "dataroo_milkytraining";

$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `users` (`username`, `password`, `fullname`, `tries`, `stage`, `test`, `ban`, `banhour`) VALUES ('$email', SHA1('$password'), 'NULL', '0', '1', NULL, NULL, NULL)";
$result = $conn->query($sql);

$sql = "DELETE FROM authorization_table WHERE authorization_key = '$authorization'";
$result = $conn->query($sql);

header('Location: login.php');
//INSERT INTO `authorization_table` (`authorization_key`) VALUES ('abcd')
?>
