<?php
session_start();

// Check if an error message is present
if (isset($_GET['error']) && $_GET['error'] == 1) {
    $errorMessage = "Email or password is incorrect.";
}

// Check if an error message is present
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    $logoutmessage = "You are logged out.";
}
?>
<?php include 'top.php';?>



  




<div  class="main-content" style="width:70%; margin-top:100px; margin-bottom:100px;">
  <div class="modal-content animate">
  <form  action="loginprocess.php" method="post" enctype="multipart/form-data">
    
      
      <img src="images/user.jpg" alt="Avatar"  class="avatar" style="margin-left:40%; margin-top:10px;">
    

      <div class="container">
        <?php if (isset($errorMessage)) : ?>
          <div class="error-message"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        <?php if (isset($logoutmessage)) : ?>
          <div class="success-message"><?php echo $logoutmessage; ?></div>
        <?php endif; ?>
        
     
     
      <input type="text" placeholder="Enter Your Email Address" name="email" required>

      
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit" name="save">Login</button>
      <label style="display:inline;">
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <span class="psw" >Forgot <a href="#">password?</a></span>
      
      
    </div>

   
  </form>
      <div id="signupbtn">
        <a href="signup.php" ><button  >Create New Account</button></a>
      </div>
  </div>
</div>
<script>
        // Wait for the page to load
        document.addEventListener('DOMContentLoaded', function() {
            // Get the error message element
            var errorMessage = document.querySelector('.error-message');
            var logoutMessage = document.querySelector('.success-message');

            // Hide the error message after 5 seconds
            setTimeout(function() {
                if (errorMessage) {
                    errorMessage.style.display = 'none';
                }
                if (logoutMessage) {
                    logoutMessage.style.display = 'none';
                }
            }, 5000);
        });
    </script>
  
  <?php include 'footer.php';?>