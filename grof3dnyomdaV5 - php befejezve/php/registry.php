<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'grof3dnyomda');
if ($conn->connect_error) {
    exit();
}

if (isset($_POST['submit'])) {
    $phoneNumber = $_POST['phoneNumber'];
    $userName = $_POST['userName'];
    $passWord = $_POST['passWord'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddr'];


    if ($phoneNumber == '') {
        $phonenumber = 'null';
    }

    $sql = "INSERT INTO users VALUES('$userName','$passWord','$firstName','$lastName', '$phoneNumber','$emailAddress');";
    if ($conn->query($sql) === TRUE) {
        header('location:../homePage.php');
    } else {
        echo "Unfortunately it didn't work out now, try again!";
    }
}
?>