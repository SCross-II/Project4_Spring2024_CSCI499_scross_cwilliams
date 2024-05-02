<!DOCTYPE html>
<html>
<head>
    <title>Sports Quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
                        <a class="nav-link" href="main.php">Home</a>
                    </li>
                    <!-- Link to Login/Signup Page -->
                    <li class="nav-item">
                        <a class="nav-link" href="random.php">More Trivia</a>
                    </li>
                    <!-- Link to Logout Page -->
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    <div class="container">
        <h2>Sports Quiz</h2>

        <?php
        // Sample questions and options
        $questions = array(
            "In what sports league do the Minnesota Lynx play?",
            "What’s the name of the French brand of luxury sports cars that includes the Veyron, Chiron, and Divo?",
            "Since he pitched 749 games in his 22-year career (including a perfect game in 1904), which MLB player has an award for great pitchers named after him?",
            "In a football game, what’s it called when a player loses control (and therefore possession) of the ball before they have a chance to score, get tackled, or go out of bounds?",
            "What is the feline name of the sports teams of the University of Kentucky?",
            "What former Minnesota Vikings and New England Patriots wide receiver has the NFL records for single season touchdown receptions, as well as the rookie record in that category? He’s also known for his tempestuous attitude, demanding multiple trades in his career.",
            "The modern NBA team known as the Washington Wizards began their journey in Chicago as the Packers. Before finally landing in Washington, D.C., the team was transferred to what charming city of the Eastern US?",
            "Only one NFL team has their logo on one side of the helmet and NOT on the other side. What team is this?",
            "If you had tickets to Game 5 of the NBA Finals on June 11, 1997, you would witness Michael Jordan's iconic 'flu game' in what city?",
            "What Washington Wizards player tarnished his legacy and standing in the NBA when he infamously brought guns into the locker room during the 2009-10 season?"
        );

        // Sample options for each question
        $options = array(
            array("NFL", "NBA", "MLB"),
            array("Ferrari", "Bugatti", "Lamborghini"),
            array("Cy Young", "Babe Ruth", "Roger Clemens"),
            array("Fumble", "Interception", "Incomplete Pass"),
            array("Tigers", "Wildcats", "Panthers"),
            array("Randy Moss", "Jerry Rice", "Terrell Owens"),
            array("Philadelphia", "Boston", "Charlotte"),
            array("Pittsburgh Steelers", "Oakland Raiders", "Cleveland Browns"),
            array("Chicago", "Salt Lake City", "New York"),
            array("Gilbert Arenas", "Michael Jordan", "LeBron James")
        );

        // Function to shuffle options
        function shuffle_options($options) {
            foreach ($options as &$option) {
                shuffle($option);
            }
            return $options;
        }

        // Shuffle options for each question
        $shuffled_options = shuffle_options($options);

        // Display questions and options
        for ($i = 0; $i < count($questions); $i++) {
            echo "<div class='question'>";
            echo "<h4>" . $questions[$i] . "</h4>";
            echo "<div class='form-check'>";
            foreach ($options[$i] as $option) {
                echo "<input type='radio' class='form-check-input' name='question_$i' value='$option'>";
                echo "<label class='form-check-label'>$option</label>";
                echo "<br>";
            }
            echo "</div>";
            echo "</div>";
        }
        ?>
        
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    <!-- Bootstrap JavaScript library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
