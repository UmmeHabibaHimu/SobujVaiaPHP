
<?php
$msg="";
$DBhost="localhost";
$DBuser="root";
$DBpass="";
$DBname="cbait";
$conn=mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);
mysqli_set_charset($conn, "utf8");

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="INSERT INTO `reg`(`name`, `email`, `pass`) VALUES ('$name','$email','$pass')";
    $run=mysqli_query($conn,$sql);
    if ($run==true){
        echo "Success";
    }
    else{
        echo "Failed";
    }
}

$selectSQL="SELECT * FROM `reg` order by name ASC";
$runSelect=mysqli_query($conn,$selectSQL);

if (isset($_GET['msg'])){
    $msg=$_GET['msg'];
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input required name="pass" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="submit" value="SAVE" type="submit" class="form-control btn btn-success" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                </div>
            </div>
        </form>

        <h3>User Table:</h3>

        <?php echo $msg;?>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Pass</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($data=mysqli_fetch_assoc($runSelect)){
            ?>
            <tr>
                <td><?php echo $data['name'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['pass'];?></td>
                <td><a href="update.php?id=<?php echo $data['id'];?>">Update</a></td>
                <td><a href="delete.php?id=<?php echo $data['id'];?>">Delete</a></td>
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