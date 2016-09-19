<?php

ini_set("display_errors", 1);
error_reporting(-1);
define("APP_PATH",  realpath(dirname(__FILE__).'/../'));
$app=new Yaf_Application(APP_PATH."/conf/application.ini");

$app->bootstrap()->run();

