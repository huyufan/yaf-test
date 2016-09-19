<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coupon
 *
 * @author huyf
 */
class CouponModel  extends ActiveModel {
    public $id;
    public $code;
    public $promotion_id;
    public $customer_id;
    public $status;
    public $created_at;
    public $update_at;
    public  function getInstance(){
        
    }
    public static function table(){
        return "hg_coupon";
    }
}
