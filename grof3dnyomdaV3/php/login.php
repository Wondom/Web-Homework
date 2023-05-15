<?php

$conn = mysqli_connect('localhost','root','root','grof3dnyomda');
if ($conn -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

session_start();

if (isset($_POST['submit'])) {
    echo '<script> alert("Szia!")</script>';
    $name = mysqli_real_escape_string($conn, $_POST['userName']);
    //$email = mysqli_real_escape_string($conn, $_POST['passWord']);
    $pass = $_POST['passWord'];
    //$cpass = md5($_POST['cpassword']);

    $select = " SELECT * FROM users WHERE user_name = '$name' && user_passwd = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['logged'] = true;
        header('location:../homePage.php');
    } else {
        $error[] = 'Hibás felhasználónév vagy jelszó!';
        echo $error[0];
    }
}

?>