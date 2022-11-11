<?php
    //header
    $docnum=$_POST["DocNum"];
    $docdate=$_POST["DocDate"];
    $part_id=$_POST["part_id"];
    $part_name=$_POST["cardname"];
    $doctotal=$_POST["totaldata"];
    //lines
    $prod_ids=$_POST['prod_id'];
    $prodnames=$_POST['prodname'];
    $qtys= $_POST['qty'];
    $unitvals = $_POST['unitval'];
    $linetotals = $_POST['linetotal'];
    $items = array();
    $size = count($prod_ids);

    //includes
    include("../model/database.php");
    include("../model/order.php");

    //datebase connection
    $data = new connect;
    $db = $data->db_connect();

    //insert header
    $orders = new order;
    $neworder = $orders->order_insert($db, $docnum, $docdate, $part_id, $part_name, $doctotal);
    $last_insert_id = $db->lastInsertId();
    for($i=0;$i < $size; $i++)
    {
        if (empty($prod_ids[$i])) {
            continue;
        }

        $items[] = array(
            'order_id' => $last_insert_id,
            'linenum' => $i+1,
            'prod_id' => $prod_ids[$i],
            'prodname' => $prodnames[$i],
            'qty' => $qtys[$i],
            'unitval' => $unitvals[$i],
            'direction' => 0,
            'warehouse_id' => 1,
            'linetotal' => $linetotals[$i]
        );
    }

    $sql = "INSERT INTO RDR1 (order_id, linenum, prod_id, prodname, qty, unitval, direction, warehouse_id, linetotal)
        VALUES (:order_id, :linenum, :prod_id, :prodname, :qty, :unitval, :direction, :warehouse_id, :linetotal);";
        $requete = $db->prepare($sql);

    foreach ($items as $item) {
        // var_dump($item);
        $requete->execute($item);
    }
    // var_dump($neworder);
    // var_dump($docnum);
    // var_dump($docdate);
    // var_dump($part_id);
    // var_dump($part_name);
    // var_dump($doctotal);
    // var_dump($prod_ids);
    // var_dump($prodnames);
    // var_dump($qtys);
    // var_dump($unitvals);
    // var_dump($linetotals);
    // var_dump($items);

    header("location:order_list.php");

    

?>