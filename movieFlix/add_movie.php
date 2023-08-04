
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/add_movie.css">
    <title>Admin Panel</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        section {
            height: 95.30vh;
            background-color: rgb(30, 30, 30);
        }

        .container-fluid {
            padding-left: 0;
            padding-right: 0;
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

        .nav-item {
            color: rgb(150, 150, 150);
            text-transform: uppercase;
            font-family: 'Press Start 2P', cursive;
        }

        .right-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            margin-top: 3px;
            padding: 20px;
            border-radius: 8px;
            width: 700px;
            height: 450px;
        }
        .right-container .container {
            color: white;
            font-family: 'Press Start 2P', cursive;
            font-size: 15px;
        }
        .right-container .container .space {
            margin-bottom: 15px;
            margin-right: 10px;
            border-radius: 10px;
            padding-top: 3px;
            padding-bottom: 3px;
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
        .right-container .container .space_actors {
            margin-bottom: 15px;
            margin-right: 10px;
            border-radius: 10px;
            width: 470px;
            padding-top: 3px;
            padding-bottom: 30px;
            color: #000000;
        }
        .right-container .container .gender {
            margin-right: 60px;
            color: #fff;
        }
        .right-container .container .genre {
            margin-right: 67px;
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
            margin-right: 20px;
            color: #fff;
        }
        .right-container .container .actors {
            float: top;
            margin-right: 62px;
            color: #fff;
        }
        .right-container .container .dob {
            margin-right: 18px;
            color: #fff;
        }
        .right-container .container .link {
            margin-right: 32px;
            color: #fff;
        }
        .right-container .container .description {
            margin-right: 28px;
            color: #fff;
            padding-top: -30px;
        }
        .right-container .container .mybtn {
            margin-top: 10px;
            color: white;
        }
        .right-container .container h2 {
            text-align: center;
            text-transform: uppercase;
            color: #fff;
            margin-bottom: 20px;
            font-family: 'Press Start 2P', cursive;
        }
        .right-container .container .mybtn {
            color: #fff;
            background-color: rgb(115, 7, 7);
            border-radius: 5px;
            font-family: 'Press Start 2P', cursive;
            padding: 2px;
            text-transform: uppercase;
            margin-right: 10px;
            margin-left: 230px;
        }

        .right-container .container .mybtn2 {
            color: #fff;
            background-color: rgb(7, 115, 7);
            border-radius: 5px;
            font-family: 'Press Start 2P', cursive;
            padding: 2px;
            text-transform: uppercase;
        }

        label {
            color: black;
            font-weight: bold;
            margin-bottom: 5px;
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
        .btn {
            background-color: green;
            border-radius: 5px;
            width: 650px;
            color: #fff;
            margin-top: 10px;
        }
        .box {
            border: 1px solid #fff;
            width: 650px;
            padding-left: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 3px;
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
        <!-- View Details -->
        <div class="right-container">
        
            <div class="container">
            <h2>Author Details</h2>
            <?php if (isset($_GET['error'])): ?>
		        <p><?php echo $_GET['error']; ?></p>
	        <?php endif ?>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <label class="fname">First Name</label>
                    <input class="space" type="text" name="fname" id="fname" required>

                    <label class="lname">Last Name</label>
                    <input class="space" type="text" name="lname" id="lname" required><br>

                    <label class="gender">Gender</label>
                    <select class="space1" name="gender" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select><br>

                    <label class="age">Movie Name</label>
                    <input class="space1" type="text" name="mname" id="mname" required><br>

                    <label class="genre">Genre</label>
                    <select class="space1" name="genre" id="genre">
                        <option>Action</option>
                        <option>Adventure</option>
                        <option>Comedy</option>
                        <option>Romance</option>
                        <option>Horror</option>
                        <option>Fantasy</option>
                        <option>Isekai</option>
                    </select><br>

                    <label class="dob">Date Publish</label>
                    <input class="space1" type="date" name="dop" id="dop" required><br>

                    <label class="actors" style="position: relative; top: -50px;">Actors</label>
                    <textarea class="space1"id="actors" name="actors" rows="2" cols="50" required>

                    </textarea>

                    <label class="description" style="position: relative; top: -90px;">Description</label>
                    <textarea class="space1"id="description" name="description" rows="4" cols="50" required>

                    </textarea>

                    <div class="box">
                        <input type="file" name="my_image">
                        <input type="file" name="my_video">
                    </div>                  

                    <input type="submit"
                           class="btn" 
                           name="submit"
                           value="Upload">
                    </form>
            </div>
        </div>
    </section>
    <!-- JavaScript -->
    <script src="js/boostrap.min.js"></script>
</body>
</html>