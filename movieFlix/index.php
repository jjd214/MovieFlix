<?php
include('db_conn.php');
require_once('php/init.php');
access();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/test.css">
    <title>Home Page</title>
    <style>
        .heading-section3 {
            text-align: center;
            text-transform: uppercase;
            color: #e67e22;
            font-size: 25px;
            font-family: 'Press Start 2P', cursive;
            margin-top: 500px;
        }
        .container2 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 150vh;
        }
        .container {
            width: 1100px;
            background-color: rgb(30, 30, 30);
            margin-left: auto;
            margin-right: auto;
            height: 2400px;
        }
        .container3 {
            width: 800px;
            height: 200px;
            background-image: linear-gradient(rgba(10, 10, 10, 0.781),rgba(15, 15, 15, 0.801)), url(img/chef1-bg.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 10px;
            margin: auto;
            box-shadow: -5px 3px 33px -4px rgba(84,81,81,1);
            -webkit-box-shadow: -5px 3px 33px -4px rgba(84,81,81,1);
            -moz-box-shadow: -5px 3px 33px -4px rgba(84,81,81,1);
            margin-top: 50px;
        }
        .section3-card{
            padding-top: 23px;
            padding-left: 35px;
        }
        .section3-card-image {
            height: 150px;
            width: 150px;
            border-radius: 100px;
        }
        .container3 h3 {
            font-size: 15px;
            color: rgb(149, 31, 149);
            text-transform: uppercase;
            margin-left: 190px;
            margin-top: -130px;
            font-family: 'Press Start 2P', cursive;
        }
        .container3 p {
            margin-left: 190px;
            margin-top: 20px;
            margin-right: 35px;
            font-size: 15px;
            line-height: 15px;
            font-family: 'Press Start 2P', cursive;
            color: #fff;
        }
        .container3:hover,
        .container3:active {
            background-image: url(img/chef1-bg.jpg);
            color: black;
            transition: 0.5s;
        }
        
        .container4 {
            width: 800px;
            height: 200px;
            background-image: linear-gradient(rgba(10, 10, 10, 0.781),rgba(15, 15, 15, 0.801)), url(img/chef2-bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 10px;
            margin: auto;
            box-shadow: -5px 3px 33px -4px rgba(84,81,81,1);
            -webkit-box-shadow: -5px 3px 33px -4px rgba(84,81,81,1);
            -moz-box-shadow: -5px 3px 33px -4px rgba(84,81,81,1);
            margin-top: 50px;
        }
        .section4-card{
            padding-top: 23px;
            padding-left: 35px;
        }
        .section4-card-image {
            height: 150px;
            width: 150px;
            border-radius: 100px;
        }
        .container4 h3 {
            font-size: 15px;
            color: rgb(149, 31, 149);
            text-transform: uppercase;
            margin-left: 190px;
            margin-top: -130px;
            font-family: 'Press Start 2P', cursive;
        }
        .container4 p {
            margin-left: 190px;
            margin-top: 20px;
            margin-right: 35px;
            font-size: 15px;
            line-height: 15px;
            font-family: 'Press Start 2P', cursive;
            color: #fff;
        }
        .container4:hover,
        .container4:active {
            background-image: url(img/chef2-bg.jpg);
            color: black;
            transition: 0.5s;
        }
        .container3:hover p {
            color: #000;
        }
        .container4:hover,
        .container4:active {
            background-image: url(img/chef2-bg.jpg);
            color: black;
            transition: 0.5s;
        }
        .container4:hover p {
            color: #000;
        }
        .search-container {
            display: flex;
            align-items: center;
            margin-top: -5px;
            padding-left: 30px;
        }
        .main-nav {
            padding-top: 25px;
            padding-right: 5px;
            display: flex;
        }
        
        .main-nav li {
            display: inline-block;
            font-size: 13px;
            margin-left: 35px;
            font-family: 'Press Start 2P', cursive;
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
        .nd-nav {
            padding-top: 30px;
            padding-right: 80px;
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <h1>MovieFlix</h1>
            <ul class="main-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="admin_panel.php">DashBoard</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li><a href="queue.php" target="_self">Queue</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <ul class="nd-nav">
                <form method="POST">
                    <li class="search-container">
                        <input type="text" name="search" class="search-bar" placeholder="Search">
                        <button name="submit" class="search-button">Search</button>
                    </li>
                </form>
            </ul>
        </div>
        <div class="container2">
            
        <?php 
            if(!isset($_POST['submit'])) {
                $sql = "SELECT * FROM `author_tbl` ORDER BY id DESC";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {  
                        $image_url = $row['image_url'];
                        $movie_id = $row['id'];
            ?>
            <div class="alb">
                <a href="movie_details.php?id=<?=$movie_id?>">
                    <img class="rounded-img" src="uploads/<?=$image_url?>">
                </a>
                <p><?=$row['movie_name']?></p>
            </div>
            <?php 
                    } 
                }
            } else  {
            
                if (isset($_POST['submit'])) {
                    $search_movie = $_POST['search'];
                
                    // Perform the database query
                    $sql = "SELECT * FROM `author_tbl` WHERE `movie_name` LIKE '%$search_movie%'";
                    $result = mysqli_query($conn, $sql);
                
                    // Display the search results
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {  
                            $image_url = $row['image_url'];
                            $movie_id = $row['id'];
                            ?>
                            <div class="alb">
                                <a href="movie_details.php?id=<?= $movie_id ?>">
                                    <img class="rounded-img" src="uploads/<?= $image_url ?>">
                                </a>
                                <p><?= $row['movie_name'] ?></p>
                            </div>
                            <?php
                        }
                    } else {
                        echo '<h1 style="font-family: \'Press Start 2P\', cursive; color: #fff">No Result Found</h1>';
                    }
            }
        }   
        ?>
        
        </div>


        <h3 class="heading-section3" id="aboutus">About Us</h3>

        <div class="container3">
            <div class="section3-card">
                <img src="img/chef1.jpg" class="section3-card-image">
                <h3>John Jacob Dimaya</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, at. Eius reprehenderit assumenda excepturi cupiditate? Soluta, ullam, dicta corporis id a quasi officiis quis laboriosam assumenda quas excepturi non modi!</p>
            </div>
        </div>
        <div class="container4">
            <div class="section4-card">
                <img src="img/johna.jpg" class="section4-card-image">
                <h3>Johna Grace Doctora</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, at. Eius reprehenderit assumenda excepturi cupiditate? Soluta, ullam, dicta corporis id a quasi officiis quis laboriosam assumenda quas excepturi non modi!</p>
            </div>
        </div>
        <div class="container3">
            <div class="section3-card">
                <img src="img/aaron.jpg" class="section3-card-image">
                <h3>Aaron Angelo Eva</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, at. Eius reprehenderit assumenda excepturi cupiditate? Soluta, ullam, dicta corporis id a quasi officiis quis laboriosam assumenda quas excepturi non modi!</p>
            </div>
        </div>
    </div>
</body>
</html>