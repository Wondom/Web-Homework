<?php

$conn = mysqli_connect('localhost','root','root','grof3dnyomda');
if ($conn -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

if (isset($_POST['submit'])) {
    $sql = 'INSERT INTO users VALUES("'.$_POST['userName'].'", "'.$_POST['passWord'].'","'.$_POST['firstName'].'","'.$_POST['LastName'].'", "'.$_POST['phoneNumber'].'", "'.$_POST['emailAddr'].'")';
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        
        
        header('location:../homaPage.php');

      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      

}
?>