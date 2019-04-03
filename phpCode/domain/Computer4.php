<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 9:53
 */
class Computer4
{
  /*类常量
  属于类的
  */
  const YES=true;
  const  NO=false;
  const ONE=1;//用self::调用
  const TWO=self::ONE+1;
}
var_dump(Computer4::TWO)  ;
var_dump(Computer4::YES)  ;

