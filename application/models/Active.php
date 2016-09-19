<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Active
 *
 * @author huyf
 */
class ActiveModel {

    public static function findOne($id) {
       $query= static::find();
       $query->getMyName()->one();
        $table = static::table();
        $sql = "select * from {$table} where id=:id";
        $rtn = BaseSqlModel::getAll($sql, array(":id" => $id), true);
        if (!empty($rtn)) {
//         $this->id=$rtn->id;
//         $this->code=$rtn->code;
//         $this->promotion_id=$rtn->promotion_id;
//         $this->static=$rtn->static;
        }
        self::save();die();
        return $this;
    }
    //public 
    public static function save(){
     echo    Active_Query::className();
//var_dump($this);
    }
    public static function find(){
     $class=   Active_Query::className();
     echo get_called_class();
     $str=new ReflectionClass($class);
     $rel=$str->newInstance([0=>get_called_class()]);
     return $rel;
    }
   
}
