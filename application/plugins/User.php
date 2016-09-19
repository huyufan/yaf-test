<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserPlugin
 *
 * @author huyf
 */
class UserPlugin extends Yaf_Plugin_Abstract {

//
//    public function routerStartup(Yaf_Request_Abstract $request,Yaf_Response_Abstract $response){
//        echo 1;
//    }
//    
    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
//        if ("xml" == strtolower($request->getParam("type"))) {
//            $response->setHeader('Content-Type', 'application/xml; charset=utf-8');
//        } else {
//            $response->setHeader('Content-Type', 'application/json; charset=utf-8');
//        }
//        Yaf_Dispatcher::getInstance()->disableview();
    }

//     public function dispatchLoopStartup(Yaf_Request_Abstract $request,Yaf_Response_Abstract $response){
//        echo 3;
//    }
//     public function preDispatch(Yaf_Request_Abstract $request,Yaf_Response_Abstract $response){
//        echo 4;
//    }
//     public function postDispatch(Yaf_Request_Abstract $request,Yaf_Response_Abstract $response){
//        echo 5;
//    }
    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        // $response->setHeader('Content-Type', 'application/json; charset=utf-8' );
  
        $controller = $request->getControllerName();
  
    }

}
