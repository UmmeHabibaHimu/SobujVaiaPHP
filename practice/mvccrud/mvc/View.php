<?php
    include 'Model.php';
    include 'Controller.php';
    if(isset($_POST['submit'])){
        $modelObject=new Model();
        $result=$modelObject->userInformationInsert();
        if($result){
            header('location:View.php?msg=Successfully inserted your data to the database...');
        }else{
            echo "Failed to insert your data!!!";
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

    <title>Procedural</title>
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input required name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
            </div>
            <div class="form-group">
                <label for="">Last Name</label>
                <input required name="lname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Email</label>
                <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Password</label>
                <input required name="pass" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <input name="submit" value="SAVE" type="submit" class="form-control btn btn-success" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
        </div>
    </form>
    <h2 class="text-success text-center"><?= isset($_GET['msg']) ?$_GET['msg'] :''?></h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Namse</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $modelObject=new Model();
            $result=$modelObject->userInformationSelect();
            if($result){
                while ($data=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                    <td><?= $data['first_name']; ?></td>
                    <td><?= $data['last_name']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['password']; ?></td>
                     <td><a href="update.php?id=<?= $data['id']; ?>" class="btn btn-success">Update</a><a class="btn btn-danger" href="delete.php?id=<?= $data['id']; ?>">Delete</a></td>
                </tr>
                <?php }
            }
        ?>

        </tbody>
    </table>
</div>
</body>
</html>