<?php
session_start();
$_SESSION['counter'] = 0;
header('location: index.php'); 
?>