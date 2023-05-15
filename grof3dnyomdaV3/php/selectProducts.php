<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'grof3dnyomda');
if ($conn->connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    //$row = mysqli_fetch_array($result);
    $_SESSION['selectedItems'] = $row;
    /*header('location:shopPage.php');*/
} else {
    $error[] = 'Hiba a lekérdezés végrehajtásában! próbálja újra később!';
    echo $error[0];
}

?>