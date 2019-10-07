<?php
    $host="localhost";
    $user="root";
    $password="";
    $database="cbait";
    $link=mysqli_connect($host,$user,$password,$database);
    $id=$_GET['id'];
    $selectQuery="SELECT * FROM `we` WHERE `id`='$id'";
    $selectSQL=mysqli_query($link, $selectQuery);
    $row=mysqli_fetch_assoc($selectSQL);
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $department=$_POST['department'];
        $semester=$_POST['semester'];
        $roll=$_POST['roll'];
        $regi=$_POST['regi'];
        $updateQuery="UPDATE `we` SET `fname`='$fname',`lname`='$lname',`department`='$department',`semester`='$semester',`roll`='$roll',`regi`='$regi' WHERE `id` = '$id'";
        $updateSQL=mysqli_query($link, $updateQuery);
        if($updateSQL){
            header('location:index.php?msg=Data Update Success !!!');
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <form action="" method="POST">
                <input value="<?= $row['fname']; ?>" name="fname" type="text" class="form-control" placeholder="First Name">

                <input value="<?= $row['lname']; ?>" name="lname" type="text" class="form-control" placeholder="Last Name">

                <input value="<?= $row['department']; ?>" name="department" type="text" class="form-control" placeholder="Department">

                <input value="<?= $row['semester']; ?>" name="semester" type="text" class="form-control" placeholder="Semester">

                <input value="<?= $row['roll']; ?>" name="roll" type="text" class="form-control"  placeholder="Roll No">

                <input value="<?= $row['regi']; ?>" name="regi" type="text" class="form-control" placeholder="Registration No">
                <label for="photo">Photo: &nbsp;</label><input type="file" name="photo" id="photo"><br>

                <button name="submit" type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>