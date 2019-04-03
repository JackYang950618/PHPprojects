<?php
/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 13:27
 */
class A{
    public $age=0;
    public $username="";

    public $obj=null;


}

class B{
    public $sex=0;

}
//浅拷贝 变量地址传递
//深拷贝 变量之间值传递
$a=new A();

$a->obj=new B();

$b=$a;//对象赋值 默认浅拷贝 普通赋值，深拷贝

$b->obj->sex=1;

var_dump($a->obj->sex);
