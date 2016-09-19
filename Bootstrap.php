<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bootstrap
 *
 * @author huyf
 */
class Bootstrap extends Yaf_Bootstrap_Abstract {

    public function _initConfig() {
       $arr= Yaf_Application::app()->getConfig();
       Yaf_Registry::set('config', $arr);
    }
    public function _initResponse(Yaf_dispatcher $dispatcher){
   
    }
    public function _initRoute(Yaf_dispatcher $dispatcher) {
        $router = Yaf_Dispatcher::getInstance()->getRouter();//获取路由器
        //$route = new Yaf_Route_Simple("m", "c", "a");
        //$route = new Yaf_Route_Supervar("r");
        $route = new Yaf_Route_Rewrite(
                'product/:ident', array(
            'controller' => 'products',
            'action' => 'view'
                )
        );
        $router->addRoute("product", $route);
        //$router->addConfig(Yaf_Registry::get("config")->routes);//加载路由协议
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        $user = new UserPlugin();
        $dispatcher->registerPlugin($user);
    }

}
