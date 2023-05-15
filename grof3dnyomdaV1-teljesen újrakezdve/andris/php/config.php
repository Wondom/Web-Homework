<?php

$conn = mysqli_connect('localhost','root','root','grof3dnyomda');
if ($conn -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>