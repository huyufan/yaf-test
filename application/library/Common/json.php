<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of json
 *
 * @author huyf
 */
class Common_json implements Decator {
    public function before() {
        ;
    }
    public function after() {
         if(isset($_GET["type"]) || $_GET["type"]=="json"){
           
       }
    }
}
