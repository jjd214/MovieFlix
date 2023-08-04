<?php
require_once('php/init.php');
    if(isset($_GET['edit'])) {
        $get_details = new get_details($_GET['edit']);
        $details = $get_details->get_details();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/view_details.css">
    <title>Admin Panel</title>
    <style>
    section {
        background-color: rgb(30, 30, 30);
        height: 100vh;
    }
    .navbar {
        background-color: #744012;
    }

    .left-container {
        float: left;
        width: 15%;
        height: 100%;
        background-color: #744012;
        padding-top: 70px;
        padding-left: 40px;
    }
    .container {
        font-family: 'Press Start 2P', cursive;
        color: white;
        font-size: 15px;
    }
    .right-container .container .space1 {
        margin-bottom: 15px;
        margin-right: 10px;
        border-radius: 10px;
        width: 530px;
        padding-top: 3px;
        padding-bottom: 3px;
        color: #000000;
    }
    .right-container .container .gender {
        margin-right: 58px;
        color: #fff;
    }
    .right-container .container .fname {
        margin-right: 25px;
        color: #fff;
    }
    .right-container .container .lname {
        color: #fff;
    }
    .right-container .container .age {
        margin-right: 82px;
        color: #fff;
    }
    .right-container .container .dob {
        margin-right: 7px;
        color: #fff;
    }
    .right-container .container .username {
        margin-right: 38px;
        color: #fff;
    }
    .right-container .container .password {
        margin-right: 42px;
        color: #fff;
    }
    .right-container .container .access {
        margin-right: 52px;
        color: #fff;
    }
    .main-nav li {
        font-size: 13px;
        font-family: 'Press Start 2P', cursive;
        margin-top: 10px;
        margin-left: 10px;
        list-style: none;
    }
        
    .main-nav li a:link,
    .main-nav li a:visited {
        text-decoration: none;
        color: #ffffff;
        word-spacing: -1px;
        text-transform: uppercase;
    }
        
    .main-nav li a:hover,
    .main-nav li a:active {
        border-bottom: 2px solid #e67e22;
    }
    .logout {
        font-family: 'Press Start 2P', cursive;
        color: #fff;
        text-transform: uppercase;
        font-size: 15px;
    }
    ::-webkit-scrollbar {
        width: 10px;
    }
        
    ::-webkit-scrollbar-track {
        background-color: rgb(26, 26, 26);
    }
        
    ::-webkit-scrollbar-thumb {
        background-color: #9f5514;
        border-radius: 5px;
    }
        
    ::-webkit-scrollbar-thumb:hover {
        background-color: #744012;
        border-radius: 5px;
    }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-md navbar-dark">
            <h5 style="color:white; font-family: 'Press Start 2P', cursive;">MovieFlix</h5>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                    <a class="logout" href="logout.php">Logout</a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Section -->
    <section>
        <div class="left-container">
            <ul class="main-nav">
                <li><a href="admin_panel.php">DashBoard</a></li>
                <li><a href="add_movie.php">Add Movie</a></li>
                <li><a href="admin_table.php">Admin List</a></li>
                <li><a href="user_table.php">User List</a></li>
                <li><a href="author_table.php">Author List</a></li>
                <li><a href="index.php">Home Page</a></li>
            </ul>
        </div>
        <!-- View Details -->
        <div class="right-container">
        <?php update();?>
        <?php delete();?>
            <div class="container">
            <h2 style="font-family: 'Press Start 2P', cursive;">Details</h2>
                <form action="" method="POST">
                    <label class="fname">First Name</label>
                    <input class="space" type="text" name="fname" id="fname" value="<?=$details['firstname'];?>" required>

                    <label class="lname">Last Name</label>
                    <input class="space" type="text" name="lname" id="lname" value="<?=$details['lastname'];?>" required><br>

                    <label class="gender">Gender</label>
                    <select class="space1" name="gender" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select><br>

                    <label class="age">Age</label>
                    <input class="space1" type="number" name="age" id="age" min="1" value="<?=$details['age'];?>" required><br>

                    <label class="dob">Date of Birth</label>
                    <input class="space1" type="date" name="dob" id="dob" value="<?=$details['dob'];?>" required><br>

                    <label class="username">Username</label>
                    <input class="space1" type="text" name="username" id="username" value="<?=$details['username'];?>" required><br>

                    <label class="password">Password</label>
                    <input class="space1" type="password" name="password" id="password"><br>

                    <label class="access">Accesss </label>
                    <select class="space1" name="access" id="access">
                        <option>admin</option>
                        <option>user</option>
                    </select><br>

                    <input class="btn btn-success" type="submit" name="submit_update" value="Update">
                    <input class="btn btn-danger" type="submit" name="submit_delete" value="Delete">
                </form>
            </div>
        </div>
    </section>
    <!-- JavaScript -->
    <script src="js/boostrap.min.js"></script>
</body>
</html>
