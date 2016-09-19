<?php
class LoginController extends Yaf_Controller_Abstract{
    
    public function indexAction(){
        define("Config", APP_PATH."/conf/config.ini");
    
        $config=new Yaf_Config_Ini(Config,"str");
        echo 1;
//        var_dump($config);
//        var_dump($config->database->params->passwdtest);
//        die();
    }
}
