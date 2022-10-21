<?php session_start() ?>
<?php
if (!isset($_SESSION['email'])){
    header('location:login.php');
}

include("../model/database.php");
include("../model/kpi.php");

$data = new connect;
$db = $data->db_connect();

$kpi1 = new kpi;
$nbproduits = $kpi1->nb_articles($db);

?>
<?php
    include("../view/layout/header_layout.php");
    include("../view/layout/top_header_layout.php");
    include("../view/layout/sidebar_layout.php");
    include("../view/home_view.php");
    include("../view/layout/footer.php") ?>
?>