<?php session_start() ?>
<?php
if (!isset($_SESSION['email'])){
    header('location:login.php');
}
?>
<?php
include("../model/database.php");
include("../model/product.php");
include("../model/order.php");
include("../model/bp.php");
include("../model/categories.php");

$selectedname=$GET['selectproduct'];

$data = new connect;
$db = $data->db_connect();

$order = new order;
$nextid = $order->order_next($db);

$partners = new partner;
$clients = $partners->client_get_all($db);

$products = new produit;
$productssearch = $products->produit_get_all($db);

$cat = new categorie;
$categories = $cat->categories_get_all($db);

$productssearcha = array();
foreach ($productssearch as $row) {
    $productssearcha[] = array(
        'label' => $row['prodname'],
        'value' => $row['id']
    );
};

?>
<?php
    include("../view/layout/header_layout.php");
    include("../view/layout/top_header_layout.php");
    include("../view/layout/sidebar_layout.php");
    include("../view/entree_add_view.php");
    include("../view/layout/footer.php") ?>
?>