<?php
    @include 'config.php';
    $sql = "SELECT package_point_id, postal_city,  package_point_address FROM package_points, postal_codes
        WHERE postal_codes.postal_code = package_points.package_point_postal_code "; 
   //echo $sql;
    $result = mysqli_query($conn, $sql);
?>