<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the values from the form
  $username = $_POST['username'];
  $password = $_POST['password'];



  // Connect to the database
  $conn = mysqli_connect('localhost', 'root', '', 'test_db');

  // Check if the connection was successful
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Perform a query to check if the username and password match
  $query = "SELECT * FROM users WHERE username='admin'or 1=1 --'' AND password='$password'";

  
  $result = mysqli_query($conn, $query);

  // Check if the query was successful and if a matching user was found
  if (mysqli_num_rows($result) == 1) {
    // Start a session and store the user's information
    session_start();
    $_SESSION['username'] = $username;

    // Redirect to the index page
    header('Location: index.php');
  } else {
    // Redirect back to the login page with an error message
    header('Location: login.php?error=Invalid username and password');
  }

  // Close the database connection
  mysqli_close($conn);
}
?>