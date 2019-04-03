<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 13:47
 */
interface Person
{
    public function eat();

    public function sleep();
}

class  Man implements Person{

    public function eat()
    {
        // TODO: Implement eat() method.
        echo "吃饭";
    }

    public function sleep()
    {
        // TODO: Implement sleep() method.
        echo "睡觉";
    }
}
class  L{
   public static function factory(Person $user){
       return $user;
   }

}
$L=L::factory(new Man());
$L->eat();