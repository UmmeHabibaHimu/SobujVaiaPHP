<?php
    include 'Controller.php';
    include 'Model.php';
    $modelObject=new Model();
    if(isset($_POST['submit'])){
        $runUpdate=$modelObject->userInformationUpdate();
        if($runUpdate){
            header('location:View.php?msg=Successfully updated your data !!!!');
        }else{
            echo "Data Update Fail !!!!";
        }
    }
    $runSelect=$modelObject->userInformationSelect();
    $data=mysqli_fetch_assoc($runSelect);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Procedural</title>
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input value="<?= $data['first_name']; ?>" required name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
            </div>
            <div class="form-group">
                <label for="">Last Name</label>
                <input value="<?= $data['last_name']; ?>" required name="lname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Email</label>
                <input value="<?= $data['email']; ?>" required name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Password</label>
                <input value="<?= $data['password']; ?>" required name="pass" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <input name="submit" value="UPDATE" type="submit" class="form-control btn btn-success" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
        </div>
    </form>
</div>
</body>
</html>
