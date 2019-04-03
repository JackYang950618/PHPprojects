<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 9:53
 */
class Computer2
{
    /*构造*/
    /*内置构造方法*/
    public function __construct($high=0)
    {
        if($high==1){
            echo '高配cpu就绪'."\n";
            echo '高配主板就绪'."\n";
            echo '高配内存就绪'."\n";
        }
        else {
            echo '低配cpu就绪'."\n";
            echo '低配主板就绪'."\n";
            echo '低配内存就绪'."\n";
    }

    }

    public function  game(){
        echo "玩游戏"."\n";
    }


}
$computer=new Computer2(1);
$computer->game();