<?php 
    @include 'config.php';
    $sql = "UPDATE orders SET completed = 1 WHERE order_number = ".$_SESSION['orderNumber'].";";
    mysqli_query($conn, $sql);
    header('location:../orderPage.php');
?>
