<?php
namespace wycto;
/*
 * 1.定义常量
 * 2.引入函数库
 * 3.自动加载
 * 4.引入助手类
 * 5.错误注册
 * 6.配置加载
 * 7.启动框架
 * 8.路由解析
 * 9.加载控制器
 * 10.返回结果
 * */
require __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ . '/../frame/start.php';

//启用框架
\wycto\App::run();
