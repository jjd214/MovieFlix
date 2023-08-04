<?php

function view_admin() {
    $view = new view();
    $view->admin_table();
}
function view_user() {
    $view = new view();
    $view->user_table();
}
function total_admin() {
    $total = new total();
    $total->total_admin();
}
function total_user() {
    $total = new total();
    $total->total_user();
}
function total_movies() {
    $total = new total();
    $total->total_movies();
}
function total_authors() {
    $total = new total();
    $total->total_authors();
}
function update() {
    if (isset($_GET['edit'])) {
        $update = new update($_GET['edit']);
        $update->update();
    }
}
function update_authors() {
    if (isset($_GET['edit'])) {
        $update = new update_authors($_GET['edit']);
        $update->update_author();
    }
}
function delete() {
    if (isset($_POST['submit_delete'])) {
        $delete = new delete($_GET['edit']);
        $delete->delete();
    }
}
function delete_authors() {
    if (isset($_POST['submit_delete'])) {
        $delete = new delete_authors($_GET['edit']);
        $delete->delete_authors();
    }
}
function add_movie() {
    $add_movie = new add_movie();
    $add_movie->add_movie();
}
function view_authors(){
    $view = new view();
    $view->author_table();
}
function signup() {
    $signup = new signup();
    $signup->signup();
}
function login() {
    $login = new login();
    $login->login();
}
function access() {
    $login = new login();
    $access = $login->get_session();

    if (isset($access)) {
        if ($access['access'] == "admin" && basename($_SERVER['PHP_SELF']) !== 'index.php') {
            header("Location: index.php");
            exit(); // Ensure script execution stops after redirection
        } else if ($access['access'] == "user" && basename($_SERVER['PHP_SELF']) !== 'homepage.php') {
            header("Location: homepage.php");
            exit(); // Ensure script execution stops after redirection
        }
    } else {
        header("Location: login.php");
        exit(); // Ensure script execution stops after redirection
    }
}
function logout() {
    $logout = new login();
    $logout->logout();
}
?>