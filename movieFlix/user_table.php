<?php
require_once('php/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/user_table.css">
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
        <!-- Admin Table -->
        <div class="right-container">
            <div class="table-container">
                <?php view_user(); ?>
            </div>
        </div>
    </section>
    <!-- JavaScript -->
    <script src="boostrap.min.js"></script>
</body>
</html>