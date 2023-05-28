



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
 <div class="profile-sidebar">
      <img src="images/profile.jpg" alt="Profile Picture">
      
    <?php if ($isLoggedIn) : ?>
            <h2>Welcome, <?php echo $firstName . " " . $lastName; ?>!</h2>
            <hr><br>
            <a style="buttom:0%;"class="social-footer-icon" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            <br>
            <br>
        <?php elseif (isset($logoutMessage)) : ?>
            <div><?php echo $logoutMessage; ?></div>
        <?php else : ?>
            <div id="test">You are not logged in.</div>
        <?php endif; ?>  

      <p>Email: <?php echo $email ?>.</p>
      
      <p>Location: New York, USA</p>
      <p>Interests: Web Development, Photography</p>
      
    </div>
    <div class="profile">
    <h1>Profile Account</h1>
    <div class="success-message" style="dispay:none;" ></div>
    </div>
 
    
  
  </div>
    <script>
        // The function for cuccess message
        document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const user = urlParams.get('user');

        if (user) {
            const messageDiv = document.querySelector('.success-message');
            messageDiv.textContent = `Welcome, ${user}! You are already logged in.`;
            messageDiv.style.display = 'block';
            setTimeout(function() {
            messageDiv.style.display = 'none';
            }, 5000);
        } else {
            const messageDiv = document.querySelector('.success-message');
            messageDiv.style.display = 'none';
        }
        });

  </script>

<?php include 'footer.php';?>
