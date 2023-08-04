<?php
class movie_details extends config {

    public $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function movie_details() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `author_tbl` WHERE `id` = '$this->id'");
        $stmt->execute();
        $data = $stmt->fetch();
        $count = $stmt->rowCount();

        if($count == 1) {
            return $data;
        } else {
            echo '<script>Theres something wrong</script>';
        }
    }
}

?>