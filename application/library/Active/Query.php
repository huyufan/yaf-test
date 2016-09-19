<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActiveQuery
 *
 * @author huyf
 */
class Active_Query {
    public $limit;
    public $order;
    public $model;
   public static function className(){
       return get_called_class();
   }
   
   public function __construct($model) {
       $this->model=$model;
   }
   public function getMyName(){
       echo "huyufan";
       return $this;
   }
   public function one(){
       echo "sdfsdfdf";
   }
}
