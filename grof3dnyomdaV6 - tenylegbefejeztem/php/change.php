<?php 
    @include 'config.php';
    if(isset($_POST['submitPassword'])){
        if($_POST['newPassword']==$_POST['newPasswordR'] ){
            $sql = "UPDATE users SET user_passwd = '".$_POST['newPassword']."' WHERE user_name = '".$_SESSION['user_name']."';";
            mysqli_query($conn, $sql);
        }
        else{
            echo "Passwords must match! Please try again!"; 
        }
    }
    if(isset($_POST['submitFirstName'])){
        $sql = "UPDATE users SET user_firstname = '".$_POST['firstNameChange']."' WHERE user_name = '".$_SESSION['user_name']."'";
        mysqli_query($conn, $sql);
    }
    
    if(isset($_POST['submitLastName'])){
        $sql = "UPDATE users SET user_lastname = '".$_POST['lastNameChange']."' WHERE user_name = '".$_SESSION['user_name']."'";
        mysqli_query($conn, $sql);
    }
    if (isset($_POST['phoneChange'])){
        $sql = "UPDATE users SET user_phone = '".$_POST['phoneChange']."' WHERE user_name = '".$_SESSION['user_name']."'";
        mysqli_query($conn, $sql);
    }
    if(isset($_POST['"emailChange'])){
        $sql = "UPDATE users SET user_email = '".$_POST['emailChange']."' WHERE user_name = '".$_SESSION['user_name']."'";
        mysqli_query($conn, $sql);
    }
    $_SESSION['uzenet'] = true;
    header('location:../accountPage.php');
?>