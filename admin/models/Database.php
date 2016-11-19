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

    protected $host = "localhost";
    protected $user = "blogadmin";
    protected $pass = "12345";
    protected $dbname = "mvcmodel";

    public function connectToDb() {
        $mysqli = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($mysqli->connect_errno) {
            echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        return $mysqli;
    }

}
