<?php
    $prodcode=$_POST["prodcode"];
    $prodname=$_POST["prodname"];
    $proddesc=$_POST["proddesc"];
    $prodimg=$_POST["prodimg"];
    // $prodimg="";
    // $prodcat=$_POST["prodcat"];
    $prodcat=1;
    $price=$_POST["price"];

    include("../model/database.php");
    include("../model/product.php");

    if(isset($_FILES['prodimg'])){
        $errors= array();
        $file_name = $_FILES['prodimg']['name'];
        $file_size =$_FILES['prodimg']['size'];
        $file_tmp =$_FILES['prodimg']['tmp_name'];
        $file_type=$_FILES['prodimg']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['prodimg']['name'])));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"../public/img/products/".$prodcode);
           
        }else{
        }
     }

    $data = new connect;
    $db = $data->db_connect();

    $products = new produit;
    $newprod = $products->produit_add($db,$prodcode,$prodname,$proddesc,$prodcode,$prodcat,$price);

    // var_dump($prodcode);
    header("location:product_list.php");

    

?>