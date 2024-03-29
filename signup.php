<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $billingaddress = $_POST['billingaddress'];
  $shippingaddress = $_POST['shippingaddress'];
  $contactmethod = $_POST['contactmethod'];
  $gender = $_POST['gender'];
  $birthdate = $_POST['birthdate'];
  $pass = $_POST['pass'];

  // Create a new connection
  $conn = new mysqli($servername, $username, $password, $logistic);

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  /* Prepare the SQL statement
    $sql = "INSERT INTO Customers (FirstName, LastName, Email, PhoneNumber, BillingAddress, ShippingAddress, PreferredContactMethod, Gender, DateOfBirth, SignupDate, Password)
            VALUES ('$firstname', '$lastname', '$email', '$phone', '$billingaddress', '$shippingaddress', '$contactmethod', '$gender', '$birthdate', CURDATE(), '$password')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        // Redirect to a success page or display a success message
        header("Location: success.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();*/
}
?>



<?php include 'top.php'; ?>



<div class="signup-with-container">
  <div id="signup-2">
    <img src="images/signup.png">
  </div>
  <div id="signup-1">
    <h1>Signup</h1>
    <div class="content">
      <!-- Login form goes here -->

      <a href="#001"><button class="login-btn" onclick="toggleSignupContainer()">Signup</button></a>
    </div>

    <div class="social-login">
      <button class="social-login-btn facebook-btn">
        <i class="fab fa-facebook-f"></i>
        <span>Sign up with Facebook</span>
      </button>
    </div>

    <div class="social-login">
      <button class="social-login-btn twitter-btn">
        <i class="fab fa-twitter"></i>
        <span>Sign up with Twitter</span>
      </button>
    </div>



    <div id="g_id_onload" data-client_id="YOUR_GOOGLE_CLIENT_ID" data-callback="handleCredentialResponse">
    </div>
    <div class="g_id_signin"></div>

  </div>
</div>

<div class="signup_container"id="001">

  <div class="title">Registration</div>
  <div class="content">
    <form action="register.php" method="post" enctype="multipart/form-data">
      <div class="user-details">
        <div class="input-box">
          <span class="details">First Name</span>
          <input type="text" name="firstname" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <span class="details">Last Name</span>
          <input type="text" name="lastname" placeholder="Enter your username" required>
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
          <span class="details">Phone Number</span>
          <input type="text" name="phonenumber" placeholder="Enter your number" required>
        </div>
        <div class="input-box">
          <span class="details">Password</span>
          <input type="text" name="pass" placeholder="Enter your password" required>
        </div>
        <div class="input-box">
          <span class="details">Confirm Password</span>
          <input type="text" name="passconfirm" placeholder="Confirm your password">
        </div>
        <div class="input-box">
          <span class="details">Billing Address</span>
          <input type="text" name="baddress" placeholder="Enter your Billing Address">
        </div>
        <div class="input-box">
          <span class="details">Shipping Address</span>
          <input type="text" name="shipaddress" placeholder="Enter your Shipping Address">
        </div>
        <div class="input-box">
          <label for="cmethod">Contact Method:</label>
          <select name="cmethod" id="contactoption">
            <option value="Email">Email</option>
            <option value="Text">Text</option>
            <option value="Call">Call</option>
          </select>
        </div>
        <div name="bdate" class="input-box">
          <label for="birthday">Birthday:</label>
          <input type="date" id="birthday" name="birthday">
        </div>


        <div class="input-box">
          <div class="gender-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <span class="gender-title">Gender</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
              </label>
              <label for="dot-2" style="margin-left:40px">
                <span class="dot two"></span>
                <span class="gender">Female</span>
              </label>
            </div>
          </div>
        </div>

        <div class="input-box">

          <button class="button" type="submit" name="save" value="Register">Register</button>

        </div>



    </form>
    <br>

    <a href="#" onclick="document.getElementById('mymodal').style.display='block'" id="login-in-signup">Login</a>

  </div>
</div>
</div>
<?php include 'footer.php' ?>