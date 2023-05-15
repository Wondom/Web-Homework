<?php

$conn = mysqli_connect('localhost','root','root','grof3dnyomda');
if ($conn -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

session_start();

if(!isset($_SESSION['CHART']) or empty($_SESSION['CHART'])){
    $_SESSION['CHART'] = array();
}

if (!(isset($_SESSION['logged']) and $_SESSION['logged'] == true)) {
    $username='quest';
}
if(!isset($_SESSION['beallitva']) or empty($_SESSION['beallitva']) ){
    $_SESSION['color'] ="dark";
}

?>