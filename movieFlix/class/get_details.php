<?php
class get_details extends config {
    public $id;

    public function __construct($id) {
        $this->id = $id;
    }
    
    public function get_details() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `user_tbl` WHERE `id` = '$this->id'");
        $stmt->execute();
        $data = $stmt->fetch();

        if($data > 0){
            return $data;
        }
    }
    public function get_author_details() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `id` = '$this->id'");
        $stmt->execute();
        $data = $stmt->fetch();

        if($data > 0){
            return $data;
        }
    }
}
?>