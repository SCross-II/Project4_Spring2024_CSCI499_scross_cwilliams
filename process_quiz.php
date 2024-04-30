<?php
session_start();

// Retrieve form data
$userAnswers = $_POST;

// Database connection parameters
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'quiz_database';

// Connect to the MySQL database
$conn = new mysqli($host, $user, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Initialize score
$score = 0;

// Iterate through the user's answers and calculate the score
foreach ($userAnswers as $questionId => $userAnswer) {
    // Get the correct answer for the question
    $sql = "SELECT correct_option FROM questions WHERE id = $questionId";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $correctAnswer = $row['correct_option'];

        // Compare user's answer with the correct answer
        if ($userAnswer == $correctAnswer) {
            // Increment the score if the answer is correct
            $score++;
        }
    }
}

// Record the user's score in the database
$userId = $_SESSION['user_id'];
$sql = "INSERT INTO scores (user_id, score) VALUES ($userId, $score)";
$conn->query($sql);

// Close the database connection
$conn->close();

// Display the user's score or redirect to a results page
echo "<div class='container'><h3>Your score: $score</h3></div>";
?>
