<?php

// reception des données
$email = $_POST['email'];
$password = $_POST['password'];


include '../model/database.php';
include '../model/user.php';

$data = new connect();


$db=$data->db_connect();

$check=user_check($db,$email,$password);

if($check){
    session_start();
    $_SESSION['email']=$email;
    header('location:home.php');
}
else {
    header('location:login.php');
}