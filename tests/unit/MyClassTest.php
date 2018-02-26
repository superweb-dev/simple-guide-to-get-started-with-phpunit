<?php

use PHPUnit\Framework\TestCase;
use App\Src\MyClass;

class MyClassTest extends TestCase{


    public function testCount(){

        $myClass = new MyClass();
       $this->assertEquals($myClass->calculate(5,5),10);
    }
}

?>