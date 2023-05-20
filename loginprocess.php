<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'connection.php';
    $sql = mysqli_query($conn, "SELECT * FROM customers WHERE Email='$email'AND Password='" . md5($pass) . "'");

    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['CustomerID'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First_Name"]=$row['FirstName'];
        $_SESSION["Last_Name"]=$row['LastName']; 
        header("Location: index.php"); 
    }
    else
    {
        
        
        header("Location: login.php?error=1");
        exit;
        
    }
}
?>