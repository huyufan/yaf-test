<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseSqlModel
 *
 * @author huyf
 */
class BaseSqlModel {

    private static  $_con=null;
    private  static $_instance=null;
    private function __construct() {
        $dataConf = Conf_Conf::getConf("str");
        $dsn = "mysql:dbname={$dataConf->database->params->dbname};host={$dataConf->database->params->host}";
        $user = $dataConf->database->params->username;
        $passwd = $dataConf->database->params->passwd;
        try {
            self::$_con = new PDO($dsn, $user, $passwd);
            
        } catch (PDOException $e) {
            
        }
    }

    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    private function __clone() {
        
    }

    public static function getAll($sql,$data=[],$colum=false,$debug=false) {
        self::getInstance();
       if($debug==true){self::debug($sql);}
       $stmt=self::$_con->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_FWDONLY));
       $stmt->execute($data);
       $result=$stmt->fetchAll(PDO::FETCH_CLASS);
       if($colum && !empty($result)){
           $result=$result[0];
       }
       return $result;
       }
    public static function debug($sql){
        var_dump($sql);
        exit;
    }
}
