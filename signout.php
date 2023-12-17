<?php
include 'connect.php';
include 'header.php';

session_destroy();
//session ends.
echo 'You have been logged out. <a href="signin.php"> Sign In Again</a>';

include 'footer.php';
?>
