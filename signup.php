<?php
$username = $_POST['username'];

$password = $_POST['password'];

$password = sha1($password);

$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "dataroo_milkytraining";

$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

$authorization_key = $_GET['authorization-key'];

$sql = "SELECT * FROM authorization_table WHERE authorization_key = '$authorization_key'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    header("Location: http://www.example.com/acceso-denegado.php");
    exit();
}

?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Sign Up - MilkyTraining</title>
            <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
            <script src="js/dynamic-css.js"></script>
        </head>
    <body>
    
        <div class="header-container">

        <a title="dataRoo_logo" href="https://dataroo.ai/" class="link-logo"><img class="responsive" src="https://dataroo.ai/wp-content/uploads/2022/07/Dataroo1.svg" alt="dataRoo_logo"/></a>
        <header>
            <hr class = "grey-line">
        </header>    
        </div>

        <main class = "test">
            
            <form class = "login-req" action="register.php" method="POST">
                <div class="center-login">
                    
                <label for="email">
                    <strong>Email: </strong>
                    <input class = "submit-login" type="text" name="email" id="email">
                </label><br><br><br>
                <label  for="password">
                    <strong>Password:  </strong>
                    <input class = "submit-login" type="password" name="password" id="password">
                </label>
                <?php
                echo '<input type="hidden" name="authorization_key" value="'.$authorization_key.'">';
                ?>
                <br>
                <br><input class="submit-login" type="submit" value="Create Account">
                </div>
                
            </form>
        </main>

    </body>
</html>

