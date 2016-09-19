<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDO
 *
 * @author huyf
 */
class Database_PDO implements Database_BaseData {
    protected $conn;
    public function conect($host, $user, $pwd, $dbname) {
         $con=new \PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
         $this->conn=$con;
    }
    public function query($sql) {
        $result=$this->conn->prepare($sql);
        $sd=$result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
       
    }
    public function close() {
        $this->conn->close();
    }
}
