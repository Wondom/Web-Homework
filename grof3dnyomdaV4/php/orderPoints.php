<?php

@include 'config.php';


$sql = "SELECT DISTINCT package_point_city FROM package_point";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
   $_SESSION['packagePointCity'] = $row;
} else {
    $error[] = 'Hiba a lekérdezés végrehajtásában! próbálja újra később!';
    echo $error[0];
}

?>