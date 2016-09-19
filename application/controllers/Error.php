<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Error
 *
 * @author huyf
 */
class ErrorController extends Yaf_Controller_Abstract {
    public function errorAction($exception){
        var_dump($expression);die();
        assert($exception === $exception->getCode());
      $this->getView()->assign("code", $exception->getCode());
      $this->getView()->assign("message", $exception->getMessage());
    }
}
