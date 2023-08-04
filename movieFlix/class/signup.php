<?php
class signup extends config {

    public function signup() {
        if(isset($_POST['submit'])) {
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $date_of_birth = $_POST['dob'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);
    
            $connection = $this->openConnection();
            $stmt = $connection->prepare("INSERT INTO `user_tbl` (`firstname`,`lastname`,`gender`,`age`,`dob`,`username`,`password`) VALUES (?,?,?,?,?,?,?)");
            $stmt->execute([$firstname,$lastname,$gender,$age,$date_of_birth,$username,$password]);
            $count = $stmt->rowCount();
    
            if ($count == 1) {
                echo '<script>alert("Signup Successfully");</script>';
            } else {
                echo '<script>alert("Signup Failed");</script>';
            }
        }
    }
}
?>