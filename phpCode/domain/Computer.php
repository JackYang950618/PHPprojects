<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 9:31
 * 电脑类
 */
class Computer
{
  /*属性方法定义*/
  //声明属性标识 protected 自身 子类 父类 通过this来调用
    //Private  修饰的都在方法内部调用 使用$this
    public $cpu='amd 5000';

    public $mainboard='华硕9000X';

     private $hd=512;


  //定义方法
  public function game($gameName=''){
      if($this->getHdSize()<1024){
          echo '硬盘太小';
      }
      else{
          echo '可以玩';
      }
  }
  public function job($work='写代码'){
      echo $this->game();

  }
  //私有方法 获取硬盘大小
  private function  getHdSize(){
      return $this->hd;
  }

    /**
     * @return string
     */
    public function getCpu(): string
    {
        return $this->cpu;
    }

    /**
     * @param string $cpu
     */
    public function setCpu(string $cpu)
    {
        $this->cpu = $cpu;
    }

    /**
     * @return string
     */
    public function getMainboard(): string
    {
        return $this->mainboard;
    }

    /**
     * @param string $mainboard
     */
    public function setMainboard(string $mainboard)
    {
        $this->mainboard = $mainboard;
    }

    /**
     * @return int
     */
    public function getHd(): int
    {
        return $this->hd;
    }

    /**
     * @param int $hd
     */
    public function setHd(int $hd)
    {
        $this->hd = $hd;
    }


}


//生成对象
 $computer=new Computer();
($computer->game());