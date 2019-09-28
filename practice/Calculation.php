<?php


class Calculation
{
    public function sum($num1,$num2){
        $sum=$num1+$num2;
        return "Summation is: ".$sum."<br/>";
    }
    public function sub($num1,$num2){
        $sub=$num1-$num2;
        return "Subtraction is: ".$sub."<br/>";
    }
    public function mul($num1,$num2){
        $mul=$num1*$num2;
        return "Multiplication is: ".$mul."<br/>";
    }
    public function div($num1, $num2){
        $div=$num1/$num2;
        return "Division is: ".$div."<br/>";
    }
}