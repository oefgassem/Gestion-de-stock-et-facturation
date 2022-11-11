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

$data = new connect;
$db = $data->db_connect();

$order = new order;
$orderlist = $order->order_get_all($db);

?>
<?php
    include("../view/layout/header_layout.php");
    include("../view/layout/top_header_layout.php");
    include("../view/layout/sidebar_layout.php");
    include("../view/sortie_list_view.php");
    include("../view/layout/footer.php") ?>
?>