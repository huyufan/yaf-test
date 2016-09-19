<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQLi
 *
 * @author huyf
 */
class Database_MySQLi implements Database_BaseData {

    protected $conn;

    public function conect($host, $user, $pwd, $dbname) {
        $con = mysqli_connect($host, $user, $pwd, $dbname);
        $this->conn = $con;
        //return $this;
    }

    public function query($sql) {
       $result=mysqli_query($this->conn, $sql);
        var_dump(mysqli_fetch_all($result));
    }

    public function close() {
        mysqli_close($this->conn);
    }

}
