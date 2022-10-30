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

$data = new connect;
$db = $data->db_connect();

$order = new order;
$nextid = $order->order_next($db);

?>
<?php
    include("../view/layout/header_layout.php");
    include("../view/layout/top_header_layout.php");
    include("../view/layout/sidebar_layout.php");
    include("../view/order_add_view.php");
    include("../view/layout/footer.php") ?>
?>