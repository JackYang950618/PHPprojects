<?php

/**
 * Created by PhpStorm.
 * User: 950618
 * Date: 2019/4/3
 * Time: 11:31
 */
class Test
{
  private $abc='';

    /**
     * @return string
     */
    public function getAbc(): string
    {
        return $this->abc;
    }

    /**
     * @param string $abc
     */
    public function setAbc(string $abc)
    {
        $this->abc = $abc;
    }




}

$test=new Test();
$test->setAbc("abc");
echo $test->getAbc();