<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

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
