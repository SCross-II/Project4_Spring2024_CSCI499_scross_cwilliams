<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Optionally, set a delay for automatic redirection (in seconds)
$delay = 10;
header("Refresh: $delay; url=index.php");

// HTML structure for the logout page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-5">
        <h2>You have logged out</h2>
        <p>You will be redirected to the login page in <?php echo $delay; ?> seconds.</p>
        <!-- Link or button to log in again -->
        <a href="index.php" class="btn btn-primary">Log in again</a>
    </div>
</body>
</html>
