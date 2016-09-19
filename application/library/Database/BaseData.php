<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author huyf
 */
interface Database_BaseData {
    public function  conect($host,$user,$pwd,$dbname);
    public function query($sql);
    public function close();
}
