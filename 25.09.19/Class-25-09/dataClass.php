<?php

class dataClass{
    public function userInformation(){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="INSERT INTO `reg`(`name`, `email`, `pass`) VALUES ('$name','$email','$pass')";
        $objDbController=new dbController();
        $runUserInfo=$objDbController->dataInsert($sql);
        if ($runUserInfo==true){
            return true;
        }
        else{
            return false;
        }
    }
}

?>