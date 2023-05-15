<?php
    @include 'config.php';
    $userName = $_SESSION['user_name'];
    if (!(isset($_SESSION['logged']) and $_SESSION['logged'] == true)) {
        $userName = 'quest';
    }
    $product = $_SESSION['productName'];
    $message = $_POST['messageInput'];
    $sql = 'INSERT INTO messages VALUES(null,\''.$userName.'\', \''.$product.'\', \''.$message.'\',CURRENT_TIMESTAMP)';
    
    if ($conn->query($sql) === TRUE) {
        $product= str_replace(' ', '_', $product);
        $product = str_replace('-', '_', $product);
        header('location:../products/'.$product.'.php');
    }
?>