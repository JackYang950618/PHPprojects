<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 10:18
 */
class Dad
{

    /*final class 不需要子类继承*/
    /*final function 不需要子类重写*/


    public function __construct()
    {
        echo "dad init";
    }

    protected function Kungfu(){
       echo "降龙十八掌";
   }
}

class Boy extends Dad{
    public function __construct()
    {
        echo "boy init";
        parent::__construct();//调用父类构造方法
    }
    public function run(){
     $this->Kungfu();
 }

}
$boy=new Boy();
$boy->run();