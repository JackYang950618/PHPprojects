<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 11:18
 */
function  _autoload($className){
    require  $className.'.php';
}
$imooc=new Imooc();
var_dump($imooc);