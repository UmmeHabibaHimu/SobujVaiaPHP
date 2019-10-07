<?php
    $host="localhost";
    $user="root";
    $password="";
    $database="cbait";
    $link=mysqli_connect($host,$user,$password,$database);
    $selectQuery="SELECT * FROM `we`";
    $selectSQL=mysqli_query($link, $selectQuery);


    if (isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $department=$_POST['department'];
        $semester=$_POST['semester'];
        $roll=$_POST['roll'];
        $regi=$_POST['regi'];
        $insertQuery="INSERT INTO `we`(`fname`, `lname`, `department`, `semester`, `roll`, `regi`) VALUES ('$fname','$lname','$department','$semester','$roll','$regi')";
        $insertSQL=mysqli_query($link,$insertQuery);
            if($insertSQL){
                header('location:index.php?msg=Data Insert Success !!!');
            }else{
                $insertError="Data Insert Fail";
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
                <input name="fname" type="text" class="form-control" placeholder="First Name">

                <input name="lname" type="text" class="form-control" placeholder="Last Name">

                <input name="department" type="text" class="form-control" placeholder="Department">

                <input name="semester" type="text" class="form-control" placeholder="Semester">

                <input name="roll" type="text" class="form-control"  placeholder="Roll No">

                <input name="regi" type="text" class="form-control" placeholder="Registration No">
                <label for="photo">Photo: &nbsp;</label><input type="file" name="photo" id="photo"><br>

                <button name="submit" type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    <br>

    <h3 class="text-center text-success"><?= isset($_GET['msg']) ?$_GET['msg']:''?></h3>
    <table class="table table-bordered">
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>Semester</th>
            <th>Roll No.</th>
            <th>Registration No.</th>
            <th>Photo</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($selectSQL)){ ?>
            <tr>
                <td class="table-active"><?= $row['fname']; ?></td>
                <td class="table-primary"><?= $row['lname']; ?></td>
                <td class="table-secondary"><?= $row['department']; ?></td>
                <td class="table-success"><?= $row['semester']; ?></td>
                <td class="table-danger"><?= $row['roll']; ?></td>
                <td class="table-warning"><?= $row['regi']; ?></td>
                <td class="table-info"><img src="" alt=""></td>
                <td><a href="update.php?id=<?= $row['id']; ?>" class="btn btn-success">Update</a><a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger">Delete</a></td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>