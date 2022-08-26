<?php ob_start(); ?>
<?php session_start(); ?>
<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username = "nekre.ba" && $password = "agencijanekre.ba"){
    $_SESSION['username'] = "nekre.ba";
    header("Location: index.php");
}