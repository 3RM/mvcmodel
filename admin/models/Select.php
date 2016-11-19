<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Select
 *
 * @author rodnoy
 */
class Select extends Database{
    
    private $tablename;
    
    public function __construct($tablename){        
        //$this->connectToDb();
        $this->tablename = $tablename;
    }
    
    public function getRecordById($id){
        $query = "SELECT * FROM $this->tablename WHERE id=$id LIMIT 1";
        $result = $this->connectToDb()->query($query);
        if($result){
            return $result->fetch_assoc();
        }else{
            return false;
        }
    }
    
    public function getAllData(){
        $query = "SELECT * FROM $this->tablename";
        $result = $this->connectToDb()->query($query);
        if($result){
            $items = array();
            while($item = $result->fetch_assoc()){
                $items[] = $item;
            }
            return $items;
        }else{
            return false;
        }
        
    }
}
