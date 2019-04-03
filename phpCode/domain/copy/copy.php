<?php
/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 13:21
 */
 class A{
     public $age=0;
     public $username="";

     public $obj=null;


 }
 //浅拷贝 变量地址传递
  //深拷贝 变量之间值传递
 $a=new A();
// $b=$a;//对象赋值 默认浅拷贝 普通赋值，深拷贝

//对象深拷贝
$b=clone $a;
 $b->age=1;
var_dump($a->age);
var_dump($b->age);