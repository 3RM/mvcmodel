<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Insert
 *
 * @author rodnoy
 */
class Insert extends Database{
    
    private $tablename;
    private $data;
    
    public function __construct($tablename,$data){
        $this->tablename = $tablename;
        $this->data = $data;
        //$this->connectToDb();
    }
    
    public function insertData(){
        $query = "INSERT INTO $this->tablename";
//        foreach($this->data as $key=>$value){
//            $keys[] = $key;
//            $values[] = $value;
//        }
        $query .= "(".implode(array_keys($this->data), ",").") VALUES";
        $query .= "('".implode(array_values($this->data), "','")."')";
        echo $query;
        $this->connectToDb()->query($query);        
    }
}
