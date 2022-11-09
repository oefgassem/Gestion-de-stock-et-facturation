<?php
  
// Get the user id 
$prodname = $_REQUEST['prodname'];
$selectqty = $_REQUEST['qty'];
  
// Database connection
include("../model/database.php");
include("../model/product.php");
$data = new connect;
$db = $data->db_connect();

$products = new produit;
$row = $products->product_get_by_name($db, $prodname);

// echo $row['price'];

if ($id !== "") {
    $prodcode = $row["prodcode"];
    $prodname = $row["prodname"];
    $prodimg = $row["prodimg"];
    $price = $row["price"];
    $prodid = $row["id"];

};
  
// Store it in a array
$result = array("$prodcode", "$prodname", "$prodimg", "$price", "$selectqty", "$prodid");
  
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
