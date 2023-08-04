<?php
class get_movie_list extends config {

    public function movie_list() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `author_tbl`");
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
        
    }
}
?>