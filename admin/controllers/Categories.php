<?php

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'add') {
        require_once 'views/addCategory.php';

        if (isset($_POST['addcat'])) {
            $data = array();
            $data['title'] = filter_input(INPUT_POST, 'title');
            $data['description'] = filter_input(INPUT_POST, 'description');
            $data['name'] = filter_input(INPUT_POST, 'name_category');
            $data['status'] = filter_input(INPUT_POST, 'status');

            $insert = new Insert("categories", $data);
            $insert->insertData();
        }
    }
}else{
    $select = new Select("categories");
    var_dump($select->getAllData());
    require_once 'views/allCategories.php';
}