<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 10:38
 */

include "1.php";
include "2.php";
//类似于import
use venter\session\Imooc;
use venter\Imooc as Imooc2;//as 别名
use function  venter\iLikemooc as f1;//导入方法
use const venter\IMOOC as go;
var_dump(new Imooc());
var_dump(new Imooc2());
var_dump(f1());
var_dump(go);