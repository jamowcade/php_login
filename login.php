<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 0;
      background-color: #f1f1f1;
    }

    .login-container {
      max-width: 400px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
      text-align: center;
    }

    .login-container form {
      margin-top: 20px;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .login-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .error-message {
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Page</h2>

    <!-- Check if there's an error message in the session and display it -->
    <?php
    session_start();

    if (isset($_SESSION['error_message'])) {
      echo '<p class="error-message">' . $_SESSION['error_message'] . '</p>';
      unset($_SESSION['error_message']);
    }
    ?>

    <!-- Update the form action to login_code.php -->
    <form action="login_code.php" method="POST">
      <!-- Your form fields -->
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>