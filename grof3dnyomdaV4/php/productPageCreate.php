<?php
    @include 'config.php';
    @include 'productsUpload.php';
    $mappa = "../products/";
    $pageName = $_POST['product_name'];
    $fajlnev = fopen($fajlnev02.".php", "w");
    $oldalszoveg = '
    <html>
        <head> </head>
        <body> 
        <h1>'.$_POST['product_name'].' </h1>
        <body>
    <html>
    ';

    fwrite($fajlnev,$oldalszoveg);
    rename($pageName.".php", $mappa.$fajlnev02.".php");
?>