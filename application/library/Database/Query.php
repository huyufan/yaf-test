<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Query
 *
 * @author huyf
 */
class Database_Query {

    public function query($sql) {
        if (!empty($sql)) {
            if ("select" === substr(ltrim($sql), 0, 6)) {
                $pdo = Common_Factory::getInstance("Database_PDO");
                $conf = Conf_Conf::getConf("slave1");
                $pdo->conect($conf->database->params->host, $conf->database->params->username, $conf->database->params->passwd, $conf->database->params->dbname);
               return $pdo->query($sql);
            } else if ("update" === substr(ltrim($sql), 0, 6) || "insert" === substr(ltrim($sql), 0, 6)) {
                 $pdo = Common_Factory::getInstance("Database_PDO");
                $conf = Conf_Conf::getConf("master");
                $pdo->conect($conf->database->params->host, $conf->database->params->username, $conf->database->params->passwdtest, $conf->database->params->dbname);
               return $pdo->query($sql);
            }
        }
    }

}
