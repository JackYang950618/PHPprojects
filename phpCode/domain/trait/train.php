<?php
/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 13:40
 */

/*适用于公共方法 util*/
Trait bT{
   public $abc="abc";
    public function atest(){
        echo "a";
    }

    public function btest(){
        echo "b";
    }

    public function go(){
       $this->atest();
        $this->btest();
    }
}

class A{
    use bT;

}
$a=new A();
$a->go();
echo $a->abc;
