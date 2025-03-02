<?php


$servername = "localhost";
$username = "username"; // Replace with actual username
$password = " "; // Replace with actual password
$database = "timetable";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // Prepare the SQL query
    $stmt = $conn->prepare("INSERT INTO `login data` (username, email, password) VALUES (?, ?, ?)");
    
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param('sss', $username, $email, $password);
        
        // Execute the query
        if ($stmt->execute()) {
            echo 'Registration successful...';
        } else {
            echo 'Error: ' . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo 'Error in preparing the statement: ' . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable Maker | DDT Coders</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <h2 class="logo-text">&#128467;Timetable</h2>
            </a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="openCreateAccount()">Create</a>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <!-- Scroll to About Section -->
                    <a href="#about-section" class="nav-link">About Us</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Make Timetable</h2>
                    <h3 class="subtitle">Make your timetable easily!</h3>
                    <p class="description">Welcome to our website that helps you schedule very easily.</p>
                    <div class="buttons">
                        <a href="#" class="button make-now">Make Now</a>
                        <a href="#" class="button contact-us">Contact Us</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src="Remove background project.png" alt="Hero" class="hero-image">
                </div>
            </div>
        </section>

        <!-- About Section (Add an ID here to scroll to this section) -->
        <section id="about-section" class="about-section">
            <div class="section-content">
                <div class="about-image-wrapper">
                    <img src="gettyimages-1295031176-612x612.png" alt="About" class="about-image">
                </div>
                <div class="about-details">
                    <h2 class="section-title">About Us</h2>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, soluta consequuntur dignissimos tenetur debitis unde dolores nostrum delectus aliquid veniam cumque a officia. Cum quisquam praesentium quae blanditiis doloribus dolorum deserunt nobis iure eveniet odit!</p>
                    <div class="social-link-list">
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i> </a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i> </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Create Account Modal -->
    <div id="createAccountModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close-button" onclick="closeCreateAccount()">&times;</span>
            <h2>Create New Account</h2>
            <form id="createAccountForm" action="connect.php" method="POST">

                <label for="username" >Username:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>
                <button type="submit">Create Account</button>
                
            </form>
        </div>
    </div>

    <script>
        // Function to open the Create Account modal
        function openCreateAccount() {
            document.getElementById('createAccountModal').style.display = 'block';
        }

        // Function to close the Create Account modal
        function closeCreateAccount() {
            document.getElementById('createAccountModal').style.display = 'none';
        }

        // Form submission handler 
        document.getElementById('createAccountForm').onsubmit = function(event) {
            event.preventDefault();
            // Add your account creation logic here (e.g., send data to the server)
            alert("Account created successfully!");
            closeCreateAccount(); // Close the modal after submission
        };
    </script>

    <style>
        /* Modal styles */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            position: relative;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
        }

        form label {
            display: block;
            margin-top: 10px;
        }

        form input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        form button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background-color: #0056b3;
        }
    </style>

</body>
</html>
