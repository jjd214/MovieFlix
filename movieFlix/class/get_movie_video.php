<?php
class get_movie_video extends config {

    public $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function movie_video() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `id` = '$this->id'");
        $stmt->execute();
        $data = $stmt->fetch();
        $count = $stmt->rowCount();

        if ($count == 1) {
            return $data;
        } else {
            echo '<script>alert("Theres something wrong")</script>';
        }
    }

    public function background_image() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT (`image_url`) FROM `author_tbl` WHERE `id` = '$this->id'");
        $stmt->execute();
        $img = $stmt->fetch();
        $count = $stmt->rowCount();

        if($count == 1) {
            return $img;
        } else {
            echo '<script>alert("Failed to load image")</script>';
        }
    }
}


?>