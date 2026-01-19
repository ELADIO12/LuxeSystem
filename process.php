<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Booking Status | StayLuxe</title>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="refresh" content="5;url=index.html">
</head>
<body>

<div class="content">
    <div class="wrap">
        <div class="status-message">
            <?php
            // Create variables from POST data
            $first_name = mysqli_real_escape_string($connect, $_POST['first_name']);
            $last_name = mysqli_real_escape_string($connect, $_POST['last_name']);
            $room = $_POST['room'];
            $duration = $_POST['duration'];
            $email = $_POST['email'];

            // Execute the query
            mysqli_query($connect, "INSERT INTO employees1 (first_name, last_name, room, duration, email)
                            VALUES ('$first_name', '$last_name', '$room', '$duration', '$email')");
                            
            if(mysqli_affected_rows($connect) > 0) {
                echo "<h1>Thank You!!!</h1>";
                echo "<h3>$first_name $last_name</h3>";
                echo "<p>Your room has been successfully booked.</p>";
                echo "<p class='redirect'>You are being redirected to the home page...</p>";
                echo '<a href="index.html" class="status-btn">Click here if not redirected</a>';
            } else {
                echo "<h1 class='error'>Booking Failed</h1>";
                echo "<p>Your room was not booked. Please try again.</p>";
                echo "<p>Error: " . mysqli_error($connect) . "</p>";
                echo '<a href="index.html" class="status-btn">Go Back</a>';
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>