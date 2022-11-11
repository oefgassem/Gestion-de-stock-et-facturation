<?php

$order_id=$_GET['order_id'];

include("../model/database.php");
include("../model/order.php");
include("../model/stock.php");

$data = new connect;
$db = $data->db_connect();

$stockorder = new order;
$thisorder = $stockorder->order_get_by_id($db, $order_id);

echo $thisorder;

?>