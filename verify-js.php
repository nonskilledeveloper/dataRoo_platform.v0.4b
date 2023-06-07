<?php
session_start();

if (isset($_POST['score']) && isset($_POST['query']) && isset($_POST['rc'])) {
    $hashword1 = sha1($_POST['score']);
    $hashword2 = $_POST['rc'];

    if ($hashword1 == $hashword2 || sha1($hashword1) == $hashword2) {
        $_SESSION['current_query'] = $_SESSION['current_query'] + 1;
        $_SESSION['score'] = $_SESSION['score'] + 1;

        $file_contents = file_get_contents('questions/'.$_POST['query']."-ex.php");
        
        echo '<div id="modal">
        <h2 style="color: #03d100;">Correct!</h2><br>'.

        $file_contents.
        
        '<br><button onclick="location.reload();">Contine</button>
        </div>';

    } else {
        $_SESSION['current_query'] = $_SESSION['current_query'] + 1;
        
        $file_contents = file_get_contents('questions/'.$_POST['query']."-ex.php");
        echo '<div id="modal">
        <h2 style="color: #ff0000;">Incorrect!</h2><br>'.

        $file_contents.
        
        '<br><button onclick="location.reload();">Continue</button>
        </div>';
    }
}
?>