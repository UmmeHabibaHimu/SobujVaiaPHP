<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "cbait";
$link = mysqli_connect($host, $user, $password, $database);
$id = $_GET['id'];
$deleteQuery = "DELETE FROM `we` WHERE `id`='$id'";
$deleteSQL = mysqli_query($link, $deleteQuery);
if($deleteSQL){
    header('location:index.php?msg=Data Delete Success');
}
?>