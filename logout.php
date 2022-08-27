<?php

session_start();
 

$_SESSION = array();
 
//removing session variables
session_destroy();

header("location: index.html");
exit;
?>