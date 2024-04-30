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
    </style>
</head>
<body>

    <div class="container">
        <h2>Sports Quiz</h2>

        <!-- Add buttons -->
        <button id="change-color-btn" class="btn btn-secondary mb-2">Change Background Color</button>
        <button id="toggle-fade-btn" class="btn btn-secondary mb-2">Toggle Fade</button>

        <div id="quiz-container">
            <?php
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

            // Query to fetch questions and options from the database
            $sql = 'SELECT id, question_text, option_a, option_b, option_c, correct_option FROM questions';
            $result = $conn->query($sql);

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
        // Change background color button
        document.getElementById('change-color-btn').addEventListener('click', function() {
            document.body.style.backgroundColor = document.body.style.backgroundColor === 'lightgray' ? '' : 'lightgray';
        });

        // Toggle fade button
        document.getElementById('toggle-fade-btn').addEventListener('click', function() {
            var quizContainer = document.getElementById('quiz-container');
            if (quizContainer.style.display === 'none') {
                quizContainer.style.display = 'block';
            } else {
                quizContainer.style.display = 'none';
            }
        });
    </script>
</body>
</html>
