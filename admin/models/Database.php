<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author rodnoy
 */
class Database {
    private $host = "localhost";
    private $user = "blogadmin";
    private $pass = "12345";
    private $db = "mvcmodel";
    
    public function connectToDb(){
        $mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db);
        if($mysqli){
            echo "connected";
        }
    }
    
}
