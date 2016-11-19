<?php

spl_autoload_register(function ($class_name) {
    include 'models/'.$class_name.'.php';
});

$delete = new Delete();
$delete->deleteRecord();
header('Location: index.php');
