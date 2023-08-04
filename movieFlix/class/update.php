<?php
class update extends config {
    public $id;

    public function __construct($id) {
        $this->id = $id;
    }
    public function update() {
        
        if(isset($_POST['submit_update'])) {
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $dob = $_POST['dob'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $access = $_POST['access'];

            $connection = $this->openConnection();
            $stmt = $connection->prepare("UPDATE `user_tbl` SET `firstname` = '$firstname', `lastname` = '$lastname', `gender` = '$gender', `age` = '$age', `dob` = '$dob', `username` = '$username', `password` = '$password', `access` = '$access' WHERE `id` = '$this->id'");
            $stmt->execute();
            $count = $stmt->rowCount();

            if ($count == 1) {
                echo '<script>alert("Updated Successfully");</script>';
                header("Refresh:0");
            } else {
                echo '<script>alert("Update Error");</script>';
            }
        }
    }
    public function update_author() {

        if(isset($_POST['submit'])) {
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $gender = $_POST['gender'];
            $movie_name = $_POST['mname'];
            $genre = $_POST['genre'];
            $dop = $_POST['dop'];
            $actors = $_POST['actors'];
            $description = $_POST['description'];
            $img = $_POST['my_image'];

            $connection = $this->openConnection();
            $stmt = $connection->prepare("UPDATE `user_tbl` SET `firstname` = '$firstname', `lastname` = '$lastname, `gender` = '$gender', `movie_name` = '$movie_name', `genre` = '$genre', `date_publish` = '$dop', `actors` = '$actors', `description` = '$description', `image_url` = '$img' WHERE `id` = '$this->id'");
            $stmt->execute();
            $count = $stmt->rowCount();

            if ($count == 1) {
                echo '<script>alert("Updated Successfully");</script>';
                header("Refresh:0");
            } else {
                echo '<script>alert("Update Error");</script>';
            }
            }
    } 
}

?>