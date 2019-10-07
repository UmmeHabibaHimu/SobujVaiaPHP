<?php


class Model
{
    public function userInformationInsert(){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $insertQuery="INSERT INTO `mvc_table`(`first_name`, `last_name`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$password')";
        $controllerObj=new Controller();
        $runInsertQuery=$controllerObj->userDataInsert($insertQuery);
        if($runInsertQuery){
            return true;
        }else{
            return false;
        }
    }
    public function userInformationSelect(){
        $selectQuery="SELECT * FROM `mvc_table`";
        $controllerObject=new Controller();
        $runSelectQuery=$controllerObject->userDataSelect($selectQuery);
        if($runSelectQuery){
            return $runSelectQuery;
        }else{
            return false;
        }
    }
    public function userInformationUpdate(){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $id=$_GET['id'];
        $updateSQL="UPDATE `mvc_table` SET `first_name`='$fname',`last_name`='$lname',`email`='$email',`password`='$password' WHERE `id` = '$id'";
        $controllerObject=new Controller();
        $runUpdateSQL=$controllerObject->userDataUpdate($updateSQL);
        if($runUpdateSQL){
            return true;
        }else{
            return false;
        }
    }
    public function userInformationDelete(){
        $id=$_GET['id'];
        $deleteSQL="DELETE FROM `mvc_table` WHERE `id` = '$id'";
        $controllerObject=new Controller();
        $runDelete=$controllerObject->userDataDelete($deleteSQL);
        if($runDelete){
            return true;
        }else{
            return false;
        }
    }
}
?>