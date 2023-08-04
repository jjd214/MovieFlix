<?php
require_once('functions.php');

spl_autoload_register(function($class){
    require_once $_SERVER['DOCUMENT_ROOT'].'/movieFlix/class/'.$class.'.php';
});
?>