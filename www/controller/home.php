<?php session_start() ?>
<?php
if (!isset($_SESSION['email'])){
    header('location:login.php');
}
?>
<?php
    include("../view/layout/header_layout.php");
    include("../view/layout/top_header_layout.php");
    include("../view/layout/sidebar_layout.php");
    include("../view/home_view.php");
    include("../view/layout/footer.php") ?>
?>