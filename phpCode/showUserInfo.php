<?php
/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/1
 * Time: 9:08
 */

$db = new MySQLi("172.16.1.92","root","123456","yhphp");
$sql="select * from user";
$result = $db->query($sql);//执行查询语句的结果集
//读数据
//全部取出
//$attr = $result->fetch_all();
//一行行取出
//$attr=$result->fetch_row();
//fetch_assoc();以关联数组的形式返回
$jsonarray=array();//定义数组来保存每个关联数组
while($array=$result->fetch_assoc()){ //;以关联数组的形式返回
//       print_r(json_encode($array,320));
   array_push( $jsonarray,($array));
//    $jsonarray.array_push(json_encode($array,320));
//     echo "<br>";
 }
 print_r(json_encode($jsonarray));//转成json格式




