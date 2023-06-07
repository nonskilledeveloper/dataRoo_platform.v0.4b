<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>MilkyTraining</title>
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
            
            <form class = "login-req" action="verify-credentials.php" method="POST">
                <div class="center-login">
                <label for="name">
                    <strong>Email: </strong>
                    <input class = "submit-login" type="text" name="username" id="username">
                </label><br><br><br>
                <label  for="password">
                    <strong>Password:  </strong>
                    <input class = "submit-login" type="password" name="password" id="password">
                </label>
                <br>
                <br><input class="submit-login" type="submit" value="Login">
                </div>
                
            </form>
        </main>

    </body>
</html>

