<?php

class IndexController extends Yaf_Controller_Abstract {
   public function indexAction() {//默认Action
       
//       $model=Common_Factory::getDatabase();
//      $df= $model->query("update proname set name='qwqw'");
//      var_dump($df);
//      die();
//       $conn= new Database_MySQLi();
//       $conn->conect("127.0.0.1", "root", "111111", "test");
//       $rtn= $conn->query("select * from proname where id=3223");
//       var_dump($rtn);die();
//       Foo_Dummy_Bar::getMyName();
       $this->getView()->assign("content", "Hello World");
   }
   
   public function loginAction(){
      $coupon= CouponModel::findOne(100000007);
     var_dump($coupon);
//      var_dump($coupon->status);
//       $coupon=new CouponModel();
//       $coupon->id=100000007;
//       $coupon->status=0;
//       $coupon->save();
//       die();
   }
   public function eventAction(){
     //  Yaf_Dispatcher::getInstance()->disableview();
       $att=new Common_Attech();
       $att->addserver(new Common_Oneday())->addserver(new Common_Twoday);
       $att->notify();
       $arr=array("as","bb","dd");
       var_dump($arr);
       return $arr;
       //return false;
   }
}

