<?php
$DBhost="localhost";
$DBuser="root";
$DBpass="";
$DBname="cbait";
$conn=mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);
mysqli_set_charset($conn, "utf8");

$ID=$_GET['id'];
$mess="Successfully Deleted!";
$DeleteSQL="DELETE FROM `reg` WHERE `id`='$ID'";
$runDelete=mysqli_query($conn,$DeleteSQL);
if ($runDelete==true){
    header("location:form.php?msg=$mess");
}
else{
    echo "Failed!";
}

?>