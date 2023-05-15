<?php
    @include 'config.php';
    //$orderArray = array($_SESSION['productName'],$_POST['productCount'],$_POST['productPrize']);
    array_push($_SESSION['CHART'], array($_SESSION['productName'],$_POST['productCount'],$_POST['productPrize']));
   
    $pageName = $_SESSION['productName'].".php";
    $pageName = str_replace(' ', '_', $pageName);
    $pageName = str_replace('-', '_', $pageName);
    
    //echo $_SESSION['CHART'][0];
    header('location:../products/'.$pageName)
?>