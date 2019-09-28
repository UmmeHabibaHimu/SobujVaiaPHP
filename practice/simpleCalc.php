<?php
    require_once 'Calculation.php';
    if (isset($_POST['calc'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        if(empty($num1) or empty($num2)){
            $inputError="You must fill these fields...";
        }else{
            $number1="First Number is: ".$num1."<br/>";
            $number2="Second Number is :".$num2."<br/>";
            $calc=new Calculation();
            $summation=$calc->sum($num1,$num2);
            $subtraction=$calc->sub($num1, $num2);
            $multiplication=$calc->mul($num1, $num2);
            $division=$calc->div($num1, $num2);
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <input type="number" name="num1" placeholder="Enter First Number"><br>
    <input type="number" name="num2" placeholder="Enter Second Numer"><br>
    <input type="submit" name="calc" value="Calculate">
</form>
<span style="color:red"><?= isset($inputError) ?$inputError :'' ?></span>
<span><?= isset($number1) ?$number1 :'' ?></span>
<span><?= isset($number2) ?$number2 :'' ?></span><br>
<span><?= isset($summation) ?$summation :'' ?></span>
<span><?= isset($subtraction) ?$subtraction :'' ?></span>
<span><?= isset($multiplication) ?$multiplication :'' ?></span>
<span><?= isset($division) ?$division :'' ?></span>



</body>
</html>
