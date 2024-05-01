<!DOCTYPE html>
<html>
<head>
    <title>Sports Quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Add custom styles -->
    <style>
        #quiz-container {
            display: none; /* This is for the fade effect */
        }

        /* Style for the button with a basketball image */
        #toggle-fade-btn {
            background-image: url('basketball_image.png'); /* Path to the basketball image */
            background-size: cover; /* Ensure the image covers the button */
            background-repeat: no-repeat; /* Prevent image from repeating */
            background-position: center; /* Center the image on the button */
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Sports Quiz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Link to Home Page -->
                    <li class="nav-item">
                        <a class="nav-link" href="home.html">Home</a>
                    </li>
                    <!-- Link to Login/Signup Page -->
                    <li class="nav-item">
                        <a class="nav-link" href="login_signup.html">Login/Signup</a>
                    </li>
                    <!-- Link to Logout Page -->
                    <li class="nav-item">
                     <a href="logout.php" class="btn btn-danger mb-2">Logout</a>
                       
                    </li>
                </ul>
            </div>
        </nav>

        <h2>Sports Quiz</h2>

        <!-- Buttons -->
        <button id="change-color-btn" class="btn btn-secondary mb-2">Change Background Color</button>

        <!-- Toggle fade button with a basketball image -->
        <button id="toggle-fade-btn" class="btn btn-secondary mb-2">Toggle Fade</button>

        <!-- Add the logout button -->
        

       <div id="container">
        

            //echo "ASDASDASDASDADASD";

            // Query to fetch questions and options from the database
            //$sql = 'SELECT id, question_text, option_a, option_b, option_c, correct_option FROM questions;';
            //$result = mysqli_query($conn, $sql);

            <?php
            session_start();
            
            // Retrieve form data
            $userAnswers = $_POST;
            
            // Database connection parameters
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $dbname = 'quiz';
            
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
            

            // Create a form to display quiz questions
            echo '<form id="quiz-form" method="POST" action="process_quiz.php">';

            // Check if any rows are returned
            if ($result->num_rows > 0) {
                // Iterate through the results and display questions and options
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="question">';
                    echo '<h4>' . $row['question_text'] . '</h4>';
                    echo '<div class="form-check">';
                    echo '<input type="radio" class="form-check-input" name="question_' . $row['id'] . '" value="A">';
                    echo '<label class="form-check-label">' . $row['option_a'] . '</label>';
                    echo '</div>';
                    echo '<div class="form-check">';
                    echo '<input type="radio" class="form-check-input" name="question_' . $row['id'] . '" value="B">';
                    echo '<label class="form-check-label">' . $row['option_b'] . '</label>';
                    echo '</div>';
                    echo '<div class="form-check">';
                    echo '<input type="radio" class="form-check-input" name="question_' . $row['id'] . '" value="C">';
                    echo '<label class="form-check-label">' . $row['option_c'] . '</label>';
                    echo '</div>';
                    echo '<br>';
                }
            }

            // Close the form and add a submit button
            echo '<button type="submit" class="btn btn-primary">Submit</button>';
            echo '</form>';

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>

    <!-- Add JavaScript for buttons -->
    <script>
        // Function to generate a random color in hexadecimal format
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Change background color button
        document.getElementById('change-color-btn').addEventListener('click', function() {
            // Generate a random color
            const randomColor = getRandomColor();
            // Apply the random color to the body background
            document.body.style.backgroundColor = randomColor;
        });

        // Toggle fade button
        document.getElementById('toggle-fade-btn').addEventListener('click', function() {
            var quizContainer = document.getElementById('quiz-container');
            quizContainer.style.display = quizContainer.style.display === 'none' ? 'block' : 'none';
        });
    </script>
</body>
</html>


