<?php

$conn = mysqli_connect('localhost','root','root','grof3dnyomda');
if ($conn -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

if (isset($_POST['submit'])) {
  $phonenumber =$_POST['phoneNumber']; 
  if($_POST['phoneNumber'] == ''){
    $phonenumber = 'null';
  }
    $sql = 'INSERT INTO users VALUES("'.$_POST['userName'].'", "'.$_POST['passWord'].'","'.$_POST['firstName'].'","'.$_POST['LastName'].'", "'.$phonenumber.'", "'.$_POST['emailAddr'].'")';
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('location:../homaPage.php');

      } else {
        /*echo '<script> alert("Sajnos nem sikerült létrehozni a fiókját! Próbálja meg másik felhasználónévvel!")</script>' ;*/
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      

}
?>