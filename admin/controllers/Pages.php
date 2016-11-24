<?php

if(isset($_GET['action'])){
    $data['login'] = "user8";
    $data['password'] = "user712345";
//    spl_autoload_register(function ($class_name) {
//        require_once '../admin/models/'.$class_name.'.php';
//    });
    $insert = new Insert("users", $data);
    $insert->insertData();
}else{
    require_once "../admin/views/allPages.php";
}

