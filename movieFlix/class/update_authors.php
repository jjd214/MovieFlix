<?php
class update_authors extends config {
    public $id;

    public function __construct($id) {
        $this->id = $id;
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

            $connection = $this->openConnection();
            $stmt = $connection->prepare("UPDATE `author_tbl` SET `firstname` = '$firstname', `lastname` = '$lastname', `gender` = '$gender', `movie_name` = '$movie_name', `genre` = '$genre', `date_publish` = '$dop', `actors` = '$actors', `description` = '$description' WHERE `id` = '$this->id'");

            $stmt->execute();
            $count = $stmt->rowCount();

            if ($count == 1) {
                echo '<script>alert("Updated Successfully");</script>';
            } else {
                echo '<script>alert("Update Error");</script>';
            }
            }
    } 
}

?>