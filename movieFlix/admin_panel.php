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
    <link rel="stylesheet" href="css/admin_panel.css">
    <title>Admin Panel</title>
    <style>
    section {
        background-color: rgb(30, 30, 30);
        height: 100vh;
    }
    .navbar {
        background-color: #744012;
    }
    .right-container .header {
        text-transform: uppercase;
        padding-top: 30px;
        text-align: center;
        position: absolute;
        top: 15%;
        left: 55%;
        transform: translate(-50%, -50%);
        font-family: 'Press Start 2P', cursive;
        color: #fff;
    }
    .right-container .card1,
    .right-container .card2,
    .right-container .card3,
    .right-container .card4 {
        border: 2px solid white;
        width: 22%;
        height: 40%;
        margin-top: 100px;
        margin-right: 10px;
        border-radius: 5px;
        text-transform: uppercase;
        text-align: center;
        padding-top: 10px;
        background-color: #979797;
        color: black;
        font-family: 'Press Start 2P', cursive;
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
                <a class="logout" href="#">logout</a>
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
        <div class="right-container">
            <h3 class="header">DashBoard</h3>
            <div class="card1">
                <h5>Total of admin</h5>
                <?php total_admin();?>
            </div>
            <div class="card2">
                <h5>Total of User</h5>
                <?php total_user();?>
            </div>
            <div class="card3">
                <h5>Total of Movies</h5>
                <?php total_movies();?>
            </div>
            <div class="card4">
                <h5>Total of Authors</h5>
                <?php total_authors();?>
            </div>
        </div>
    </section>
    <!-- JavaScript -->
    <script src="boostrap.min.js"></script>
</body>
</html>