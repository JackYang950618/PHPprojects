<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 13:52
 */
interface Ia
{
     const ABC="只是测试！";
public function eat();
}

interface Ib
{
    public function seelp();
}

interface AB extends Ia,Ib{

}
class Test implements AB{

    public function eat()
    {
        // TODO: Implement eat() method.
        echo "吃烧鸡";
    }

    public function seelp()
    {
        // TODO: Implement seelp() method.
        echo "学代码,不睡觉";
    }
}
$test=new Test();
$test->eat();
$test->seelp();
echo (Ia::ABC);