<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
</head>
<body>
    <h1>home page logged in successfully</h1>
    <?php
  // Start the session
  session_start();

  // Check if the user is logged in
  if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header('Location: login.php');
    exit();
  }
  ?>
     <!-- Add the logout button -->
  <form action="logout.php" method="POST">
    <input type="submit" value="Logout">
  </form>
</body>
</html>