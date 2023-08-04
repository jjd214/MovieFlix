<?php
require_once('php/init.php');

if(isset($_GET['id'])) {
    $get_movie_video = new get_movie_video($_GET['id']);
    $details = $get_movie_video->movie_video();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch</title>
    <style>
        * {
            padding: 0%;
            margin: 0%;
        }
        body {
            background-image: linear-gradient(rgba(11, 11, 11, 0.781),rgba(14, 14, 14, 0.801)), url(uploads/<?php echo $details['image_url']?>);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 92vh;
        }
        video {
            width: 800px;
            height: 500px;
            border-radius: 3px;
        }
        div {
            text-align: center;
            margin-top: 50px;
        }
        h3 {
            text-align: center;
            text-transform: uppercase;
            font-family: 'Press Start 2P', cursive;
            color: #fff
        }

    </style>
</head>
<body>
    <div>
        <h3><?=$details['movie_name']?></h3>
        <video src="uploads/<?=$details['video_url']?>" controls></video>
    </div>

</body>
</html>