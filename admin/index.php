<?php
spl_autoload_register(function ($class_name) {
        include '../admin/models/'.$class_name.'.php';
    });
session_start();
if(isset($_SESSION['admin'])){
    require_once "../admin/views/main.php";
    
}else{
    require_once "../admin/views/login.php";
}


