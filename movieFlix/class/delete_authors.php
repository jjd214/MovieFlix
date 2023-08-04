<?php
class delete_authors extends config {
    public $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function delete_authors() {
        if(isset($_POST['submit_delete'])) {
            $connection = $this->openConnection();
            $stmt = $connection->prepare("DELETE FROM `author_tbl` WHERE `id` = '$this->id'");
            $stmt->execute();
            $count = $stmt->rowCount();

            if ($count == 1) {
                echo '<script>alert("Deleted Successfully");</script>';
            } else {
                echo '<script>alert("Delete Error");</script>';
            }
        }
    }
}
?>