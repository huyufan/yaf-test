<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Products
 *
 * @author huyf
 */
class ProductsController extends Yaf_Controller_Abstract {
   public function ViewAction(){
       var_dump($this->getRequest());
       var_dump($this->getRequest()->getParam("ident"));
        var_dump($this->getRequest()->get("sd"));
       die();
   }
}
