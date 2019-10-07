<?php
    $errorMsg="";
    include 'Controller.php';
    include 'Model.php';

    if(isset($_POST['submit'])){
        $modelObj=new Model();
        $result=$modelObj->userInfoInsert();
        if($result){
            echo "Data Insert Success....";
        }else{
            echo "Data insert fail...";
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
        </div>
    </form>


    <h3>User Table:</h3><br>

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
            $modelSelectObj=new Model();
            $runSelect=$modelSelectObj->userInfoSelect();
            if($runSelect==false){
                 $errorMsg="No Data Found";
            }else{
                while ($data=mysqli_fetch_assoc($runSelect)){ ?>
                    <tr>
                        <td><?= $data['first_name']; ?></td>
                        <td><?= $data['last_name']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td><?= $data['password']; ?></td>
                    </tr>
                <?php }
            }

        ?>

        </tbody>
    </table>
</div>
</body>
</html>