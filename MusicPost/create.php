<?php
session_start();
if(!isset($_SESSION['email'])){
    echo '<p> You are not signed in. Click here to <a style="text-decoration: none" href="../signin.php" ><button class="btn btn-primary" id="button-signin" type="button">Sign In</button></a>';
     die();
}