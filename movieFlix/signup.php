<?php
require_once('php/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Signup Form</title>
  <style>
    body {
    font-family: 'Press Start 2P', cursive;
      background-color: #f2f2f2;
    }

    .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 98vh;
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
    }

    .form-group input,
    .form-group select {
      width: 300px;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group select {
      width: 100%;
      height: 34px;
    }

    .form-group input[type="submit"] {
      width: 100%;
      background-color: #e67e22;
      color: #fff;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
        background-color: #e67e22;
    }
    .link {
        color: black;
        margin-bottom: 5px;
        text-decoration: none;
    }
  </style>
</head>
<body>
    <?php signup();?>
  <div class="container">
    <h2>Signup Form</h2>
    <form  method="POST">
      <div class="form-group">
        <label for="first-name">First Name:</label>
        <input type="text" name="fname" id="first-name" name="first-name" required>
      </div>
      <div class="form-group">
        <label for="last-name">Last Name:</label>
        <input type="text" name="lname" id="last-name" name="last-name" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" name="gender" required>
          <option>Select Gender</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <a class="link" href="login.php">Go to login</a>
      <div class="form-group">
        <input type="submit" name="submit" value="Signup">
      </div>
    </form>
  </div>
</body>
</html>

