<?php
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $c_pass=$_POST['c_pass'];
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbName="cbait";
        $conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbName);
        if($conn==false){
            echo "Database conneciton failed";
        }else{
            $sql="INSERT INTO `my_table`(`fname`, `lname`, `email`, `pass`, `c_pass`) VALUES ('$fname','$lname','$email','$pass','$c_pass')";
            $result=mysqli_query($conn,$sql);
            if($result==true){
                echo "Data Inserted success !!!!";
            }else{
                echo "Data insert failed";
            }
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

    <title>MVC Login form</title>
</head>
<body>

<div class="container">

    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleInputName">First Name</label>
            <input name="fname" type="text" class="form-control" id="exampleInputName" placeholder="Enter First Name">
        </div>

        <div class="form-group">
            <label for="exampleInputName">Last Name</label>
            <input name="lname" type="text" class="form-control" id="exampleInputName" placeholder="Enter Last Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input name="c_pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Login</button>
    </form>

</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>