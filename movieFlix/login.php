<?php
require_once('php/init.php');
login();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <title>Login Form</title>
</head>
<body>
  <div class="login-container">
    <form method="POST">
      <h2>Login</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <div class="password-field">
          <input type="password" name="password" id="password" placeholder="Enter your password" required>
          <span class="toggle-password"></span>
        </div>
      </div>
      <button type="submit" name="submit">Login</button>
      <div class="signup-link">
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
      </div>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>
