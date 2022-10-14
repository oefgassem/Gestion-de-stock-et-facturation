<?php

// reception des données
$username = $_POST['email'];
$password = $_POST['password'];


include '../model/database.php';
include '../model/user.php';

$data = new connect();


$db=$data->db_connect();

$check=user_check($db,$username,$password);

if($check){
    session_start();
    $_SESSION['username']=$username;
    header('location:home.php');
}
else {
    header('location:login.php');
}