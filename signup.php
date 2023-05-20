
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

<?php include 'top.php';?>

  
<div class="signup_container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="register.php" method="post" enctype="multipart/form-data" >
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
            <input type="text" name="email"placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phonenumber" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="pass"placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="passconfirm"placeholder="Confirm your password" >
          </div>
          <div class="input-box">
            <span class="details">Billing Address</span>
            <input type="text" name="baddress" placeholder="Enter your Billing Address" >
          </div>
          <div class="input-box">
            <span class="details">Shipping Address</span>
            <input type="text" name="shipaddress"placeholder="Enter your Shipping Address" >
          </div>
          <div class="input-box">
            <label for="cmethod" >Contact Method:</label>
            <select name="cmethod" id="contactoption" >
              <option value="volvo">Email</option>
              <option value="saab">Text</option>
              <option value="saab">Call</option>
            </select>
          </div>
          <div name="bdate"class="input-box">
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" autofocus>
          </div>
       
     
        <div class="input-box">
          <div class="gender-details" >
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
          <div class="button">
            <input type="submit" name="save" value="Register">
          </div>
        </div>
     
       
      </form>
      <br>
      
          <a href="#"onclick="document.getElementById('id01').style.display='block'" id="login-in-signup">Login</a>
        
    </div>
  </div>



  <script>

</script>


	
</body>
</html>
