<?php session_start() ?>
<?php
if (!isset($_SESSION['email'])){
    header('location:login.php');
}
?>
<?php
include("../model/database.php");
include("../model/categories.php");

$data = new connect;
$db = $data->db_connect();

$categories = new categorie;
$rows = $categories->categories_get_all($db);
$rowsd = $categories->categories_get_details($db);


?>
<?php
    include("../view/layout/header_layout.php");
    include("../view/layout/top_header_layout.php");
    include("../view/layout/sidebar_layout.php");
    include("../view/categories_view.php");
    include("../view/layout/footer.php") ?>
?>