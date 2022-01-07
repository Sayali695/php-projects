<?php

// what is a session???
// information accross different pages..

// verify the user login info

session_start();
$_SESSION['username'] = "Sayali";
$_SESSION['favCat'] = "Books";
echo"Welcome ".$_SESSION['username']." Your favourite category is ".$_SESSION['favCat'];
// to unset all the variables
session_unset();
// to destroy the session 
session_destroy();


?>
