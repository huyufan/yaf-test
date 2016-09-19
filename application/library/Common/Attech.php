<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Attech
 *
 * @author huyf
 */
class Common_Attech implements Interfaces {

    private $object;

    function notify() {
        if(!empty($this->object)){
            foreach($this->object as $key=>$val){
                $this->object[$key]->update();
            }
        }
    }

    function addserver($object) {
        $this->object[] = $object;
        return $this;
    }

    function stat() {
        ;
    }

    function delte($object) {
        
    }

}
