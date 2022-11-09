<?php
    $docnum=$_POST["DocNum"];
    $docdate=$_POST["DocDate"];
    $part_id=$_POST["part_id"];
    $part_name=$_POST["cardname"];
    $doctotal=$_POST["totaldata"];


    include("../model/database.php");
    include("../model/order.php");

    $data = new connect;
    $db = $data->db_connect();

    $orders = new order;
    $neworder = $orders->order_insert($db, $docnum, $docdate, $part_id, $part_name, $doctotal);

    // var_dump($neworder);
    // var_dump($docnum);
    // var_dump($docdate);
    // var_dump($part_id);
    // var_dump($part_name);
    // var_dump($doctotal);

    header("location:product_list.php");

    

?>