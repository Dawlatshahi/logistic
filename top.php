
<?php require 'connection.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>Logistic Company Website</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script>
      function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
  }


  
    </script>
  </head>
<body>
  <header>
    <div class="logo">
     <a href="index.php" ><img src="images/logo2.png" alt="Company Logo" height="40px" width="400px"></a>
    </div>
    <div class="topnav" id="myTopnav" style="margin-bottom: 2px;">
      <div class="dropdown">
        <button class="dropbtn" style="height: 20px;">Shipping
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" style="">
          <div style="margin-top:20px;">
           <a href="#">Create a Shipment</a>
          <a href="#">Shipping Rates and Delivery Times</a>
          <a href="#">Schedule & Manage Pickups</a>
          <a href="#">Packing & Shipping Supplies</a>
          <a href="#">International Shipping Guide</a>
          <a href="#">Freit</a>
          <a href="#">All Shipping Services</a>
          
          </div>
        </div>
      </div> 
      <div class="dropdown" >
        <button class="dropbtn" style="height: 20px;">Shipping
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" style="">
          <div style="margin-top:20px;">
           <a href="#">Create a Shipment</a>
          <a href="#">Shipping Rates and Delivery Times</a>
          <a href="#">Schedule & Manage Pickups</a>
          <a href="#">Packing & Shipping Supplies</a>
          <a href="#">International Shipping Guide</a>
          <a href="#">Freit</a>
          <a href="#">All Shipping Services</a>
          
          </div>
        </div>
      </div> 
      
      <a href="#home">Home</a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
    
      <a href="#about">About</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

    
   
          
            
    <div class="social-icons">
            <ul>
                <li>
                  <a ><i class="fas fa-user-alt icon" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"></i></a>
                </li>
              
            </ul>
            <div class="search-container">
              <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
    </div>
  </header>


  

<div id="id01" class="modal">
  <div class="modal-content animate">
  <form  action="loginprocess.php" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/user.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
     
     
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
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script src="script.js"></script>

 


  
 


