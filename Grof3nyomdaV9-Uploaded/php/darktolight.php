<?php
    include 'config.php';
    $_SESSION['beallitva'] = true;

    if ($_SESSION['color'] =='light'){
        $_SESSION['color'] = 'dark';
    }
    else{
        $_SESSION['color'] = 'light';
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>