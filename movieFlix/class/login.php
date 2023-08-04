<?php
class login extends config {

    public function login() {
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM `user_tbl` WHERE `username` = ? AND `password` = ? ");
            $stmt->execute([$username,$password]);
            $data = $stmt->fetch();
            $count = $stmt->rowCount();

            if ($count == 1) {
                $this->set_session($data);
                header("Location: index.php");
            } else {
                echo '<script>alert("Incorrect username or password") </script>';
            }
        }
    }
    public function set_session($array){

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['userdata'] = array (
            "fullname" => $array['firstname']." ".$array['lastname'],
            "access" => $array['access']
        );
        return $_SESSION['userdata'];
    }
    public function get_session(){

        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['userdata'])) {
            return $_SESSION['userdata'];
        } else {
            return null;
        }
    }
    public function logout() {
        
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['userdata'] = null;
        unset($_SESSION['userdata']);
    }
}

?>