<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Delete
 *
 * @author rodnoy
 */
class Delete extends Database{
    public function deleteRecord(){
        $id = $_GET['id'];
        $query = "DELETE FROM users WHERE id=$id";
        $this->connectToDb()->query($query);
    }
}
