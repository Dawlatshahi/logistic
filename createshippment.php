
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['First_Name'])) {
  // User is not logged in, redirect to profile page
  header("Location: index.php?shipment=0");
  exit;
}
?>

<?php include 'top.php'; ?>





<div class="signup_container" style="margin-top:60px;">

  <div class="title">Create Shipment</div>
  <div class="content">
    <form action="register.php" method="post" enctype="multipart/form-data">
      <div class="user-details">
       
        <div class="input-box">
          <span class="details">Delivary Address</span>
          <input type="text" name="lastname" placeholder="Enter the Delivery Address" required>
        </div>

        <div class="input-box">
          <span class="details">Pickup address</span>
          <input type="text" name="phonenumber" placeholder="Enter the pickup address" required>
        </div>

        <div class="input-box">
          <span class="details">Receiver Name</span>
          <input type="text" name="receivername" placeholder="Enter the receiver name" required>
        </div>
        <div class="input-box">
          <span class="details">Receiver Lastname</span>
          <input type="text" name="lastname" placeholder="Enter receiver lastname"required>
        </div>
        <div class="input-box" style="margin-top:10px;">
          <label for="cmethod">Services</label>
          <select name="cmethod" id="contactoption"style="margin-bottom:15px;">
            <option value="Email">Local</option>
            <option value="Text">Global</option>
            <option value="Call">Service #3</option>
          </select>
          <br>
        
          <label for="cmethod">Packagin Options</label>
          <select name="cmethod" id="contactoption" style="margin-top:10px;">
            <option value="Email">Paperboard boxes</option>
            <option value="Text">Corrugated boxes</option>
            <option value="Call">Plastic boxes</option>
            <option value="Email">Rigid boxes</option>
            <option value="Text">Chipboard packaging</option>
            <option value="Call">Poly bags</option>
            <option value="Call">Foil sealed bags</option>
          </select>
        </div>

        <div class="input-box">
          <span class="details">Package description</span>
          <textarea type="text" name="pickup" placeholder="Enter the package description" required class="responsive-textarea" rows="7"></textarea>
        </div>
     
       
        <div name="pdate" class="input-box">
          <label for="pickupdate">Pickup Date</label>
          <input type="date" id="pickupdate" name="pickupdate">
        </div>



        <div class="input-box" style="margin-top:-5px;">

          <button class="button" type="submit" name="save" value="Save">Save The Shipment</button>

        </div>
    </form>
    

    

  </div>
</div>
</div>
<?php include 'footer.php' ?>