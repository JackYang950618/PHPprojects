<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 11:24
 */
class A
{
   public static  function who(){
       echo "A类的who方法";
   }
    public static  function test(){
       static::who();
    }
}
class B extends A{
    public static  function who(){
        echo "B类的who方法";
    }
}
//后期绑定self==static 自动绑定调用的对象
B::test();