<?php
require_once('php/init.php');
if(isset($_GET['id'])) {
    $movie_details = new movie_details($_GET['id']);
    $details = $movie_details->movie_details();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
    * {
        padding: 0;
        margin: 0;
    }
    html {
        font-family: 'Press Start 2P', cursive;
        color: #e67e22;
    }
    .tag {
        color: #744012;
    }
  
    .container {
        width: 1100px;
        background-color: rgb(30, 30, 30);
        margin-left: auto;
        margin-right: auto;
        height: 1200px;
    }
    
    body {
        background-color: black;
    }
    
    .nav {
        height: 100px;
        background-color: #744012;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .container2 {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }
    .card {
        text-align: center;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 4px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
    }

    .card img {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .card h1 {
        margin-bottom: 10px;
        font-size: 24px;
        color: #e67e22;
    }

    .card p {
        margin-bottom: 10px;
        color: #333;
    }

    .card a {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 16px;
        background-color: #e67e22;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .card a:hover {
        background-color: #d35400;
    }
    
    .alb {
        width: 200px;
        height: 200px;
        padding: 5px;
        text-align: center;
        transition: transform 0.3s ease;
    }
    
    .alb:hover {
        transform: scale(0.9);
    }
    
    .alb img {
        width: 100%;
        height: 100%;
        border-radius: 8px;
    }
    
    a {
        text-decoration: none;
        color: black;
    }
    
    .alb p {
        color: #e67e22;
        font-family: 'Press Start 2P', cursive;
    }
    
    .container .nav h1 {
        padding-top: 10px;
        padding-left: 30px;
        color: #ffffff;
        font-family: 'Press Start 2P', cursive;
    }
    
    .main-nav {
        padding-top: 25px;
        padding-right: 110px;
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
    
    .search-container {
        display: flex;
        align-items: center;
        margin-top: -5px;
        padding-left: 30px;
    }
    
    .search-bar {
        padding: 5px;
        border-radius: 5px;
        margin-right: 10px;
    }
    
    .search-button {
        padding: 5px 10px;
        background-color: #e67e22;
        border: none;
        color: #ffffff;
        border-radius: 5px;
        cursor: pointer;
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
    .img {
        height: 300px;
        width: 300px;
        border-radius: 2%;
    }
    video {
			width: 400px;
			height: 360px;
	}
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <h1>MovieFlix</h1>
            <ul class="main-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="queue.php">Queue</a></li>
                <li><a href="#AboutUs">About Us</a></li>
                <li><a href="#">Logout</a></li>
                <li class="search-container">
                    <input type="text" class="search-bar" placeholder="Search">
                    <button class="search-button">Search</button>
                </li>
            </ul>
        </div>
        <div class="container2">
            <div class="card">
                <img src="uploads/<?=$details['image_url'];?>" alt="Movie Poster">
                <h1><?= $details['movie_name']?></h1>
                <p>Author name: <?= $details['firstname']. " ". $details['lastname']?></p>
                <p>Genre: <?= $details['genre']?></p>
                <p>Date of Release: <?= $details['date_publish']?></p>
                <p>Description: <?= $details['description']?></p>
                <p>Actors: <?= $details['actors']?></p>
                <a href="watch.php?id=<?=$details['id']?>" target="_blank">Click here to watch</a>
            </div>
        </div>
    </div>

</body>
</html>
