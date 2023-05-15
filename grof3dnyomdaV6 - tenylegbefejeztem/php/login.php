<?php
@include 'config.php';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['userName']);
    $pass = $_POST['passWord'];
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