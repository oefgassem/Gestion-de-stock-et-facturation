<?php session_start() ?>
<?php
if (!isset($_SESSION['email'])){
    header('location:login.php');
}
?>
<?php
include("../model/database.php");
include("../model/product.php");

$data = new connect;
$db = $data->db_connect();

$products = new produit;
$lastcode = $products->produit_last($db);

var_dump($lastcode);

?>