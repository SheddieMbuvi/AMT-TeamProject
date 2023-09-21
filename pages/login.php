<?php
$host = 'localhost'; // The database server hostname (usually 'localhost' for local development)
$username = 'root'; // Your database username
$password = ''; // database password
$database = 'amt_database'; // Your database name

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"]; // Corrected from "name" to "username"
    $password = $_POST["password"];

    // Validate and sanitize user input if needed

    // Query the database to check for the username and password
    $sql = "SELECT * FROM users WHERE name = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Successful login
        session_start();
        $_SESSION["username"] = $username; // Store username in a session variable
        header("Location: home.php"); // Redirect to the home page
        exit();
    } else {
        // Invalid login
        echo "Invalid username or password.";
		header("refresh:2;url=index.php"); // Redirect to the index for another trial
    }

    $stmt->close();
}

$conn->close();
?>
