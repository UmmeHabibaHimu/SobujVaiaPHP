<?php
    include 'Controller.php';
    include 'Model.php';
    $modelObject=new Model();
    $runDelete=$modelObject->userInformationDelete();
    if($runDelete){
        header('location:View.php?msg=Successfully Deleted your data !!!!');
    }else{
        header('location:View.php?msg=Delete Failed !!!!');
    }
?>