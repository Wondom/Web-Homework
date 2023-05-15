<?php
    @include 'config.php';
    $total = 0;
    foreach($_SESSION['CHART'] as $item){
      $total += $item[1]*$item[2];
    }
    $packet_point_id = $_POST['packetChoose'];
    if(isset($_SESSION['logged']) and $_SESSION['logged'] == true){
        $userName = $_SESSION['user_name'];
      
        $firstName = "";
        $lastName = "";
        $email = "";
       
        $sql = "SELECT user_firstname, user_lastname, user_email FROM users WHERE user_name LIKE '".$userName."'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $firstName = $row['user_firstname'];
                $lastName =  $row['user_lastname'];
                $email  = $row['user_email'];
            }
        }
        $sql= "INSERT INTO orders VALUE(null, '".$userName."', $total, $packet_point_id,'".$email."','".$firstName."','".$lastName."',0)";
       
    }
    else{
        $userName = 'quest';
        $sql = 'SELECT user_name FROM users WHERE  ';
        $firstName = $_POST['firstNameQuest'];
        $lastName  = $_POST['lastNameQuest'];
        $email = $_POST['emailQuest'];
        
        $sql= "INSERT INTO orders VALUE(null, '".$userName."', $total, $packet_point_id,'".$email."','".$firstName."','".$lastName."',0)";
       
    } 
    
    mysqli_query($conn, $sql);
    $orderNumber = 0;
    $orderNnumberSQL = "SELECT order_number FROM orders WHERe email LIKE '$email' ORDER BY order_number DESC LIMIT 1;";
    echo $orderNnumberSQL;
    $result = mysqli_query($conn, $orderNnumberSQL);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $orderNumber = $row['order_number'];
            echo "Sikerült";
        }
    }

        $sql  ="";
        foreach ($_SESSION['CHART'] as  $value) {
            echo $orderNumber;
            $sql  ="INSERT INTO orderedproducts VALUES ($orderNumber, '".$value[0]."', $value[1]);";
            mysqli_query($conn, $sql);
        }
        unset($_SESSION['CHART']);
        header('location:../homePage.php');

?>