<?php

class MyClass{

    public function MyFunction(){
        $a=10;
        $b=20;
        $c=$a+$b;
        return $a;
    }

    public function MyFunction2(){
        $name="I am Sobuj";
        $name2="I am Rupom Vai";
        return $name;

    }

    public function SumUserInput($value1,$value2){
        $sum=$value1+$value2;
        return $sum;

    }

    public static function MyStaticFunction(){
        $c=100+2030;
        return $c;
    }

     function __construct(){
        $h=30;
        $i=600;
        echo $k=$h+$i;
    }

}


$classObj=new MyClass();
 $classObj->MyFunction();

$numOne=40;
$numTwo=100;
echo $classObj->SumUserInput($numOne,$numTwo);

echo $classObj::MyStaticFunction();



?>