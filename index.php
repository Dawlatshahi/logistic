<?php  session_start();?>
<?php include 'top.php';?>

<?php


// Check if the user is logged in
if (isset($_SESSION["Email"])) {
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

<?php if ($isLoggedIn) : ?>
        <div>Welcome, <?php echo $firstName . " " . $lastName; ?>!</div>
        <a href="logout.php">Logout</a>
    <?php elseif (isset($logoutMessage)) : ?>
        <div><?php echo $logoutMessage; ?></div>
    <?php else : ?>
        <div>You are not logged in.</div>
    <?php endif; ?>   
  
</body>
</html>
