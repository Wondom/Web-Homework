<?php
    @include 'config.php';
    $sql = "DELETE FROM orders WHERE user_name = '".$_SESSION['user_name']."'";
    mysqli_query($conn, $sql);
    $sql = "DELETE FROM users WHERE user_name = '".$_SESSION['user_name']."'";
    mysqli_query($conn, $sql);
    @include 'logoff.php'
?>