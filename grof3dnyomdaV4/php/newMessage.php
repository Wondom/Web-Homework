<?php
    @include 'config.php';
    $userName = $_SESSION['user_name'];
    if (!(isset($_SESSION['logged']) and $_SESSION['logged'] == true)) {
        $userName = 'quest';
    }
    $product = $_SESSION['productName'];
    $message = $_POST['messageInput'];
    $sql = 'INSERT INTO message VALUES(null,\''.$userName.'\', \''.$product.'\', \''.$message.'\',CURRENT_TIMESTAMP)';
    echo $sql;
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        
        $product= str_replace(' ', '_', $product);
        $product = str_replace('-', '_', $product);
        
       header('location:../products/'.$product.'.php');
    }
?>