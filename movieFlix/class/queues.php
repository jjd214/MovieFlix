<?php
class queues extends config {

    public function queues() {

        if(isset($_GET['action'])) {

            $genre = "Action";

            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `genre` = '$genre'");
            $stmt->execute();
            $movies = $stmt->fetchAll();
            $count = $stmt->rowCount();

            if($count > 0) {
                return $movies;
            } else {
                echo "<h2> No Result Found</h2>";
                return [];
            }

        } else if(isset($_GET['adventure'])) {

            $genre = "Adventure";

            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `genre` = '$genre'");
            $stmt->execute();
            $movies = $stmt->fetchAll();
            $count = $stmt->rowCount();

            if($count > 0) {
                return $movies;
            } else {
                echo "<h2> No Result Found</h2>";
                return [];
            }

        } else if(isset($_GET['comedy'])) {

            $genre = "Comedy";

            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `genre` = '$genre'");
            $stmt->execute();
            $movies = $stmt->fetchAll();
            $count = $stmt->rowCount();

            if($count > 0) {
                return $movies;
            } else {
                echo "<h2> No Result Found</h2>";
                return [];
            }

        } else if(isset($_GET['romance'])) {

            $genre = "Romance";

            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `genre` = '$genre'");
            $stmt->execute();
            $movies = $stmt->fetchAll();
            $count = $stmt->rowCount();

            if($count > 0) {
                return $movies;
            } else {
                echo "<h2> No Result Found</h2>";
                return [];
            }

        } else if(isset($_GET['horror'])) {

            $genre = "Horror";

            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `genre` = '$genre'");
            $stmt->execute();
            $movies = $stmt->fetchAll();
            $count = $stmt->rowCount();

            if($count > 0) {
                return $movies;
            } else {
                echo "<h2> No Result Found</h2>";
                return [];
            }

        } else if(isset($_GET['fantasy'])) {

            $genre = "Fantasy";

            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `genre` = '$genre'");
            $stmt->execute();
            $movies = $stmt->fetchAll();
            $count = $stmt->rowCount();

            if($count > 0) {
                return $movies;
            } else {
                echo "<h2> No Result Found</h2>";
                return [];
            }

        } else if(isset($_GET['isekai'])) {

            $genre = "Isekai";

            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `genre` = '$genre'");
            $stmt->execute();
            $movies = $stmt->fetchAll();
            $count = $stmt->rowCount();

            if($count > 0) {
                return $movies;
            } else {
                echo "<h2> No Result Found</h2>";
                return [];
            }

        }
    }
}

?>