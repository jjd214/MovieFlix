<?php
class search_movie extends config {


    public function search_movie() {
 

        $search_movie = $_POST['search_movie'];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `movie_name` LIKE '%$search_movie%'");
        $stmt->execute();
        $data = $stmt->fetchAll();
        $count = $stmt->rowCount();

        if ($count > 0) {
            return $data;
        } else {
            return array();
        }
    
    }
}
?>