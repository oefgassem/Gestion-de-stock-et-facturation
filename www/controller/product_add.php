<?php session_start() ?>
<?php
if (!isset($_SESSION['email'])){
    header('location:login.php');
}
?>
<?php
include("../model/database.php");
include("../model/product.php");
include("../model/categories.php");

$data = new connect;
$db = $data->db_connect();

$products = new produit;
$lastcode = $products->produit_last($db);

$cat = new categorie;
$categories = $cat->categories_get_all($db);

?>
<?php
    include("../view/layout/header_layout.php");
    include("../view/layout/top_header_layout.php");
    include("../view/layout/sidebar_layout.php");
    include("../view/product_add_view.php");
    include("../view/layout/footer.php") ?>
?>