<?php
//require_once "models/Database.php";

spl_autoload_register(function ($class_name) {
    include 'models/'.$class_name.'.php';
});

//$obj = new Database();
//$obj->connectToDb();
$select = new Select("users");
$rows = $select->getRecordById(1);
echo $rows['login']. " ". $rows['password']."</br>";
echo "<hr>";
foreach ($select->getAllData() as $value) {
    echo $value['id'].") ".$value['login'].":".$value['password']." <a href='delete.php?id=".$value['id']."'>Удалить</a></br>";
}
