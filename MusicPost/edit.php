<?php
session_start();
if(!isset($_SESSION['email'])){
    echo '<h2>You are not signed in. Click here to <a href="../signin.php" >Sign In</a></h2>';
     die();
}
