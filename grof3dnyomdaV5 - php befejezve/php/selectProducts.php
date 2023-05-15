<?php
@include 'config.php';
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['selectedItems'] = $row;
} else {
    $error[] = 'Hiba a lekérdezés végrehajtásában! próbálja újra később!';
    echo $error[0];
}
?>