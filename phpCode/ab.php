<?php
header("Content-type:text/html;charset=utf-8");
$username = $_POST['username'];
$age = $_POST['age'];
$job = $_POST['job'];
$db = new MySQLi("172.16.1.92:3306","root","123456","yhphp");
$sql="insert into user (name,age,job) VALUES ('$username','$age','$job')";
$db->query($sql);
if($db){
    echo "插入成功！";
}
else{
    echo "插入失败！";
}
//$json_arr = array("username"=>$username,"age"=>$age,"job"=>$job);
//$json_obj = json_encode($json_arr);
//echo $json_obj;
