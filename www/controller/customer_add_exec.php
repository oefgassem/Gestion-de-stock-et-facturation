<?php
    $cardcode=$_POST["cardcode"];
    $partname=$_POST["partname"];

    include("../model/database.php");
    include("../model/bp.php");

    $data = new connect;
    $db = $data->db_connect();

    $bp = new partner;
    $newcustomer = $bp->customer_add($db,$cardcode,$partname);

    // var_dump($prodcode);
    header("location:customer_list.php");

    

?>