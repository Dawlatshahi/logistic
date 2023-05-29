<?php session_start(); ?>

<?php include 'top.php'; ?>

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>logistic-track</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/track.css">

</head>

<body>

    <div class="main-content">
        <div class="profile-sidebar">
            <img src="images/profile.jpg" alt="Profile Picture">

            <?php if ($isLoggedIn) : ?>
                <h2>Welcome, <?php echo $firstName . " " . $lastName; ?>!</h2>
                <hr><br>
                <a style="buttom:0%;" class="social-footer-icon" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
            <div class="success-message" style="display:none;"> </div>
            <h1>Your Package Information</h1>


            <div class="track-info">
                <div class="item1">
                    <p><b>Tracking Number:</b> 34356FD</p>
                    <p><b>Order ID:</b> 3435uywdg</p>
                    <p><b>Destination Address:</b> USA</p>
                    <p><b>Source Address:</b> Nicosia TRNC</p>
                    <p><b>Shipping Date:</b> 20 May, 2023 </p>
                    <p><b>Arrival Date:</b> 30 May, 2023</p>
                </div>
                <div class="item2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47318383.924233645!2d-62.92296055853501!3d43.62559068606539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de170478e0b125%3A0xa03ff4a843367700!2sStreet%20Food%20Yard!5e0!3m2!1sen!2s!4v1685357190654!5m2!1sen!2s"
                         width="600" height="300" style="margin-top:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

            <div class="stepper-wrapper">
                <div class="stepper-item completed">
                    <div class="step-counter">1</div>
                    <div class="step-name">First</div>
                </div>
                <div class="stepper-item completed">
                    <div class="step-counter">2</div>
                    <div class="step-name">Second</div>
                </div>
                <div class="stepper-item active">
                    <div class="step-counter"><img src="images/track.png" style="width:115px;"></div>
                    <div class="step-name">Third</div>
                </div>
                <div class="stepper-item">
                    <div class="step-counter">4</div>
                    <div class="step-name">Forth</div>
                </div>
            </div>
            <div class="info">
                <p><b>Progress Bar Information</b></p>
                <p>This bar shows the transmission of your packet:</p>
                <p>First stage: Packing.</p>
                <p>Second stage: On way.</p>
                <p>Third stage: Arrived to our nearest branch to destination.</p>
                <p>Forth stage: Delivered.</p>
            </div>

        </div>
    </div>

        <?php include 'footer.php'; ?>

</body>

</html>



<script>
    // The function for success message
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