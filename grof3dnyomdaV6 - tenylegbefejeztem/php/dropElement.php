<?php
    @include 'config.php';
    \array_splice($_SESSION['CHART'],$_POST['dropElementIndex'],$_POST['dropElementIndex']+1);
    header('location:../chartPage.php');
?>