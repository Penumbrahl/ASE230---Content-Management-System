<?php
session_start();
session_destroy();
echo "<h2>You have successfully signed out. Click here to return to the <a href='index.php'>HomePage</a></h2>";
?>