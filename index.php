<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>MilkyTraining</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
            <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
            <script src="js/dynamic-css.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        </head>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            header('Location: login.php');
            }
        ?>

        <?php
        session_start();
        if (isset($_SESSION['ban']) && $_SESSION['ban'] !== NULL){
            header('Location: templates/ban.php');
        }
        ?>
        
        <div class="header-container">
        <a title="dataRoo_logo" href="https://dataroo.ai/" class="link-logo"><img class="responsive" src="https://dataroo.ai/wp-content/uploads/2022/07/Dataroo1.svg" alt="dataRoo_logo"/></a>
        <header>
            <hr class = "grey-line">
        </header>
        </div>

        <main class = "test">
            <?php
            require 'body.php';
            ?>
        </main>
    
    </body>
</html>