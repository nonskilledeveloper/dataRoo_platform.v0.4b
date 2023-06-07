<?php
session_start();

echo '<h1 class = "overlay-text">Milky Way LightSpeed Training Test</h1><br>';

session_start();
echo '<label class = "overlay-text">QUESTION #'.$_SESSION['current_query'].'</label><br><br>';

switch ($_SESSION['current_query']) 
    {
    case 1:
        include 'questions/q46.php';
        break;
    case 2:
        include 'questions/q38.php';
        break;
    case 3:
        include 'questions/q16.php';
        break;
    case 4:
        include 'questions/q21.php';
        break;
    default:
        include 'questions/q2.php';
    }
    
echo '<script src="js/blur.js"></script>';
echo '<script src="js/verify-answer.js"></script>';

?>

