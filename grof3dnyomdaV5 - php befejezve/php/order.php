<?php
    @include 'config.php';
    array_push($_SESSION['CHART'], array($_SESSION['productName'],$_POST['productCount'],$_POST['productPrize']));
    $pageName = $_SESSION['productName'].".php";
    $pageName = str_replace(' ', '_', $pageName);
    $pageName = str_replace('-', '_', $pageName);
    header('location:../products/'.$pageName);
?>