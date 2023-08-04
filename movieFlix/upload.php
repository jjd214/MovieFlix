<?php

if (isset($_POST['submit']) && isset($_FILES['my_image']) && isset($_FILES['my_video'])) {
    include "db_conn.php";

    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $mname = $_POST['mname'];
    $genre = $_POST['genre'];
    $dop = $_POST['dop'];
    $actors = $_POST['actors'];
    $description = $_POST['description'];

    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $img_tmp_name = $_FILES['my_image']['tmp_name'];
    $img_error = $_FILES['my_image']['error'];

    $video_name = $_FILES['my_video']['name'];
    $video_tmp_name = $_FILES['my_video']['tmp_name'];
    $video_error = $_FILES['my_video']['error'];

    if ($img_error === 0 && $video_error === 0) {
        if ($img_size > 15025000) {
            echo '<script>alert("Sorry your file is too large.");</script>';
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $img_allowed_exs = array("jpg", "jpeg", "png");

            $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
            $video_ex_lc = strtolower($video_ex);
            $video_allowed_exs = array("mp4", 'webm', 'avi', 'flv');

            if (in_array($img_ex_lc, $img_allowed_exs) && in_array($video_ex_lc, $video_allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($img_tmp_name, $img_upload_path);

                $new_video_name = uniqid("video-", true). '.'.$video_ex_lc;
                $video_upload_path = 'uploads/'.$new_video_name;
                move_uploaded_file($video_tmp_name, $video_upload_path);

                // Insert into Database
                $sql = "INSERT INTO `author_tbl` (`firstname`, `lastname`, `gender`, `movie_name`, `genre`, `date_publish`, `actors`, `description`, `image_url`, `video_url`) 
                        VALUES ('$fname', '$lname', '$gender', '$mname', '$genre', '$dop', '$actors', '$description', '$new_img_name','$new_video_name')";
                mysqli_query($conn, $sql);
                echo '<script>alert("Movie uploaded successfully!");</script>';
            } else {
                echo '<script>alert("You cant Upload this type of file!");</script>';
            }
        }
    } else {
        echo '<script>alert("Unknown error occurred!");</script>';
    }
} else {
    echo '<script>alert("First Error");</script>';
}
