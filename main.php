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
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Rest of your content -->

    </div>

    <!-- Bootstrap JavaScript library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Add your custom JavaScript -->
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


        <h2>Sports Quiz</h2>

        <!-- Buttons -->
        <button id="change-color-btn" class="btn btn-secondary mb-2">Change Background Color</button>

        <!-- Toggle fade button with a basketball image -->
        <button id="toggle-fade-btn" class="btn btn-secondary mb-2">Toggle Fade</button>

        <!-- Add the logout button -->
        <div class="quiz-container">
        
        

        1. In what sports league do the Minnesota Lynx play?
        <div>
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">A. ESPN</button>
        <button type="button" class="btn btn-primary">B. NBCUniversal</button>
        <button type="button" class="btn btn-primary">C. WWE</button>
        </div>
        
        <div>

       2. What’s the name of the French brand of luxury sports cars that includes the Veyron, Chiron, and Divo?
       <div>
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Ferrari</button>
        <button type="button" class="btn btn-primary">Bugatti</button>
        <button type="button" class="btn btn-primary">Lamborghini</button>
        </div>
        
        <div>

        3.Since he pitched 749 games in his 22-year career (including a perfect game in 1904), which MLB player has an award for great pitchers named after him?
       <div>
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Cy Young</button>
        <button type="button" class="btn btn-primary">Sandy Koufax</button>
        <button type="button" class="btn btn-primary">Babe Ruth</button>
        </div>
        
        <div>
        
        4. In a football game, what’s it called when a player loses control (and therefore possession) of the ball before they have a chance to score, get tackled, or go out of bounds?

       <div>
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Interception</button>
        <button type="button" class="btn btn-primary">Touchdown</button>
        <button type="button" class="btn btn-primary">Fumble</button>
        </div>
        
        <div>  

        5. What is the feline name of the sports teams of the University of Kentucky?

       <div>
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Wildcats</button>
        <button type="button" class="btn btn-primary">Tigers</button>
        <button type="button" class="btn btn-primary">Bulldogs</button>
        </div>
        
        <div>

        6. What former Minnesota Vikings and New England Patriots wide receiver has the NFL records for single season touchdown receptions, as well as the rookie record in that category? He’s also known for his tempestuous attitude, demanding multiple trades in his career.
       <div>
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Terrell Owens</button>
        <button type="button" class="btn btn-primary">Jerry Rice</button>
        <button type="button" class="btn btn-primary">Randy Moss</button>
        </div>
        
        <div>

        7.The modern NBA team known as the Washington Wizards began their journey in Chicago as the Packers. Before finally landing in Washington, D.C., the team was transferred to what charming city of the Eastern US?
       <div>
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Philadelphia</button>
        <button type="button" class="btn btn-primary">Baltimore</button>
        <button type="button" class="btn btn-primary">Boston</button>
        </div>
         <div>

        8. Only one NFL team has their logo on one side of the helmet and NOT on the other side. What team is this?
       <div>
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Dallas Cowboys</button>
        <button type="button" class="btn btn-primary">Pittsburgh Steelers</button>
        <button type="button" class="btn btn-primary">Green Bay Packers</button>
        </div>
         <div>

        9. If you had tickets to Game 5 of the NBA Finals on June 11, 1997, you would witness Michael Jordan's iconic "flu game" in what city?
 
       <div>
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Salt Lake City</button>
        <button type="button" class="btn btn-primary">Los Angeles</button>
        <button type="button" class="btn btn-primary">Chicago</button>
        </div>
         <div>

        10. What Washington Wizards player tarnished his legacy and standing in the NBA when he infamously brought guns into the locker room during the 2009-10 season?
       <div>
        <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Gilbert Arenas</button>
        <button type="button" class="btn btn-primary">John Wall</button>
        <button type="button" class="btn btn-primary">Bradley Beal</button>
        </div>
        
       
        
        
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




