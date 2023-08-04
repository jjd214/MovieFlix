<?php
class add_movie extends config {

    public function add_movie() {

        if (isset($_POST['submit'])) {

            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $gender = $_POST['gender'];
            $movie_name = $_POST['mname'];
            $genre = $_POST['genre'];
            $date_publish = $_POST['dop'];
            $actors = $_POST['actors'];
            $description = $_POST['description'];

            $connection = $this->openConnection();
            $stmt = $connection->prepare("INSERT INTO `author_tbl` (`firstname`,`lastname`,`gender`,`movie_name`,`genre`,`date_publish`,`actors`,`description`) VALUES(?,?,?,?,?,?,?,?)");
            $stmt->execute([$firstname,$lastname,$gender,$movie_name,$gender,$date_publish,$actors,$description]);
            $count = $stmt->rowCount();

            if ($count == 1) {
                echo '<script>alert("Movie Added Successfully");</script>';
                header("Location: movie_list.php");
            } else {
                echo '<script>alert("Movie Added Failed");</script>';
            }
        }
    }
}
?>