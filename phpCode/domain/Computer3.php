<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 9:53
 */
class Computer3
{


    public function  game(){
        echo "玩游戏"."\n";
    }

    /*析构*/
    /*当$computer对象被销毁时，调用这个方法*/
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "关闭电源";
    }
}
$computer=new Computer3();
$computer->game();
unset($computer);
echo "good job";