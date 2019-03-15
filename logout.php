<?php 
session_start();
session_destroy();
unset($_SESSION['pseudonym']);
header('location: index.php');
?>