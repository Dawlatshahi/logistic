<?php
extract($_POST);
include("connection.php");
$sql = mysqli_query($conn, "SELECT * FROM customers WHERE Email='$email'");
if (mysqli_num_rows($sql) > 0) {
    echo "Email Id Already Exists";
    exit;
} else {
    if (isset($_POST['save'])) {
        $query = "INSERT INTO customers (FirstName, LastName, Email, PhoneNumber, Password)
        VALUES ('$firstname', '$lastname', '$email', '$phone', '" . md5($pass) . "' )";
        $sql = mysqli_query($conn, $query) or die("Could Not Perform the Query");
        header("Location: login.php?status=success");
    }
}
?>
