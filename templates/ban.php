<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>MilkyTraining</title>
            <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
            <script src="../js/dynamic-css.js"></script>

            <style>
                #countdown {
                font-size: 90px;
                text-align: center;
                margin: auto;
                width: 50%;
                }
                #timeLeft {
                    text-align: center;
                }
            </style>

        </head>
    <body>
    
        <div class="header-container">
            <a title="dataRoo_logo" href="https://dataroo.ai/" class="link-logo"><img class="responsive" src="https://dataroo.ai/wp-content/uploads/2022/07/Dataroo1.svg" alt="dataRoo_logo"/></a>
                <header>
                    <hr class = "grey-line">
                </header>
        </div>

        <main class = "test">

            <?php

            session_start();

            //UPDATE_BANHOUR
            $servername = "localhost";
            $usernameDB = "root";
            $passwordDB = "";
            $dbname = "dataroo_milkytraining";

            $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT ban, banhour FROM users WHERE username = '" .$_SESSION['username']."'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            
            // $_SESSION['ban'] = $row['ban'];

            $timezone = new DateTimeZone('America/Mexico_City');
            $current_time = new DateTime();
            $current_time = $current_time->setTimezone($timezone);

            $banhour = new DateTime($row['banhour']);
            $unban_time = $banhour->add(new DateInterval('PT2H'));

            $server_time = $current_time->format('Y-m-d H:i:s');
            $unban_time = $unban_time->format('Y-m-d H:i:s');

            $server_time = new DateTime($server_time);
            $unban_time = new DateTIme($unban_time);
            
            
            //BANHOUR UPDATED
            if ($_SESSION['ban'] == NULL){
                header('Location: index.php');
            }

            if ($row['ban'] == "temporal"){

                if ($server_time > $unban_time) {

                    // echo '<br><br>banhour: '.$banhour->format('Y-m-d H:i:s').'<br> current_time: '.$current_time->format('Y-m-d H:i:s');
                    $sql = "UPDATE users SET ban = NULL WHERE username = '" . $_SESSION['username'] . "'";
                    $_SESSION['ban'] = NULL;

                    if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                    $conn->close();
                    header('Location: ../index.php');

                }elseif ($server_time <= $unban_time) {

                    echo "<br><h2>Hey! ".$_SESSION['fullname']."</h2>";
                    echo "<p>We understand that you may have had some difficulty with the online evaluation. We kindly suggest that you take some time to review your materials and come back to retake it at your convenience, specifically in 2 hours. After that time, your account will be re-enabled to take the evaluation again. Our goal is to ensure that you have the best chance of success and feel relaxed while doing it. Thank you for your understanding.</p>"."<br>";
                    echo "Your access to the evaluation has been temporarily restricted at: ".'<label id="banhour">'.$row['banhour'].'</label><br>';
                    echo "Server time: ".$current_time->format('Y-m-d H:i:s')."<br>";
                    echo '<br><br><h1 id="timeLeft">Time left:</h1><br><div id="countdown"></div>';
                    echo '<script src="js/countdown.js"></script>';
                }
            }
            ?>

        </main>

    </body>
</html>

