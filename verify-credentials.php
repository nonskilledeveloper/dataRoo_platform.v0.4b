<?php

$username = $_POST['username'];

$password = $_POST['password'];

$password = sha1($password);

$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "dataroo_milkytraining";




$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $hash = $result->fetch_assoc()['password'];

    
    if ($password == $hash) {
        
        $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT fullname, tries, stage, test, ban, banhour FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();

        $fullname = $row['fullname'];
        $tries = $row['tries'];
        $stage = $row['stage'];
        $test = $row['test'];
        $ban = $row['ban'];
        $banhour = $row['banhour'];



        // Inicio de sesión exitoso
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['tries'] = $tries;
        $_SESSION['stage'] = $stage;
        $_SESSION['test'] = $test;
        $_SESSION['ban'] = $ban;
        $_SESSION['banhour'] = $banhour;
        $_SESSION['current_query'] = 0;
        $_SESSION['score'] = 0;
        $_SESSION['logged_in'] = true;

        // echo "username: ".$_SESSION['username']."<br>";
        // echo "fullname: ".$_SESSION['fullname']."<br>";
        // echo "tries: ".$_SESSION['tries']."<br>";
        // echo "stage: ".$_SESSION['stage']."<br>";
        // echo "test: ".$_SESSION['test']."<br>";
        // echo "ban: ".$_SESSION['ban']."<br>";
        // echo "banhour: ".$_SESSION['banhour']."<br>";
        
        header("Location: index.php");
    } else {
        header("Location: templates/wrong-pass.php");
    }
} else {
    echo "El usuario no existe. Por favor, registrese.";
}
$conn->close();

?>