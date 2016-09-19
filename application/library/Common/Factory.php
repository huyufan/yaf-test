<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Factory
 *
 * @author huyf
 */
class Common_Factory {
    public static function getInstance($class){
        $stance=new $class;
        return $stance;
    }
    
    public static function getDatabase(){
        $query=new Database_Query();
        return $query;
    }
    
 
}
