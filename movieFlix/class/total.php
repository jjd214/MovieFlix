<?php
class total extends config {

    public function total_admin() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT COUNT(*) AS total_admin FROM `user_tbl` WHERE `access` = 'admin'");
        $stmt->execute();
        $data = $stmt->fetch();
        $count = $data['total_admin'];

        echo "<h3 style='font-size: 40px; margin-top: 40px; color: red;'>$count</h3>";
    }
    public function total_user() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT COUNT(*) AS total_admin FROM `user_tbl` WHERE `access` = 'user'");
        $stmt->execute();
        $data = $stmt->fetch();
        $count = $data['total_admin'];

        echo "<h3 style='font-size: 40px; margin-top: 40px; color: red;'>$count</h3>";
    }
    public function total_movies() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT COUNT(*) AS total_admin FROM `author_tbl`");
        $stmt->execute();
        $data = $stmt->fetch();
        $count = $data['total_admin'];

        echo "<h3 style='font-size: 40px; margin-top: 40px; color: red;'>$count</h3>";
    }
    public function total_authors() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT COUNT(*) AS total_admin FROM `author_tbl`");
        $stmt->execute();
        $data = $stmt->fetch();
        $count = $data['total_admin'];

        echo "<h3 style='font-size: 40px; margin-top: 40px; color: red;'>$count</h3>";
    }
}
?>