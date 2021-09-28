<?php 

session_start();

// session_destroy untuk mengahpus session 
session_destroy();
header('Location:login.php');


?>
