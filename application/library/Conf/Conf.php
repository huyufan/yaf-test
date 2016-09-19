<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conf
 *
 * @author huyf
 */
class Conf_Conf {
   public static function getConf($str){
        define("Config", APP_PATH."/conf/config.ini");
        $config=new Yaf_Config_Ini(Config,$str);
        return $config;
   }
}
