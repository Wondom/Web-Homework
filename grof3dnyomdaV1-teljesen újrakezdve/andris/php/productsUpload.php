<?php

$conn = mysqli_connect('localhost','root','root','grof3dnyomda');
if ($conn -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

if (isset($_POST['submit'])) {
    $width = $_POST['product_width'];
    $height = $_POST['product_height'];
    $length = $_POST['product_length'];
    if($_POST['product_width'] == ''){
        $width = 'null';
    }
    if($_POST['product_height']== ''){
        $height= 'null';
    }
    if($_POST['product_length'] == ''){
        $length = 'null';
    }

    $sql = 'INSERT INTO products VALUES(null,"'.$_POST['product_name'].'", '.$_POST['product_price'].',"'.$_POST['product_material'].'","'.$_POST['product_color'].'", '.$width.', '.$height.','.$length.')';
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        
        header('location:../productsUploadPage.php');
        echo '<script> alert("Sikeres feltöltés!")</script>';

      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo 'addd';
      }
}
?>