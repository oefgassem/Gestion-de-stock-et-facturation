<?php
    $CATD=$_POST["CATD"];
    $DESCR=$_POST["DESCR"];
    $PARENT=(is_numeric($_POST["PARENT"]) ? (int)$_POST["PARENT"] : NULL);

    include("../model/database.php");
    include("../model/categories.php");

    $data = new connect;
    $db = $data->db_connect();

    $categories = new categorie;

    if ($CATD == null) {
    } else {
        $newcat = $categories->categorie_add($db, $CATD, $DESCR, $PARENT);
        // var_dump($PARENT);
    }

    header("location:categories.php");

    

    

?>