<?php
session_start();

$key1 = isset($_POST['pw1']) ? $_POST['pw1'] : '';
$key2 = isset($_POST['pw2']) ? $_POST['pw2'] : '';

$auth1 = "admin";
$auth2= "admin";

if ((strcmp($key1, $auth1)==0) && (strcmp($key2, $auth2)==0)){
    $_SESSION['UID']=$auth1+$auth2;
    header("Location: shell.php");
    die();
} else {
    
}
