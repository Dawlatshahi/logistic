<?php  session_start();?>
<?php include 'top.php';?>

<?php


// Check if the user is logged in
if (isset($_SESSION["Email"])) {
    $email = $_SESSION["Email"];
    $firstName = $_SESSION["First_Name"];
    $lastName = $_SESSION["Last_Name"];
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}

// Check if the user has logged out
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    $logoutMessage = "You have been successfully logged out.";
}
?>
 <div class="main-content">
        <?php
        if (isset($_GET['shipment']) && $_GET['shipment'] == 0) {
        echo '<div class="message">To create a shipment, you should log in first.</div>';
        }
        ?>
  
  </div>



<?php include 'footer.php';?>
