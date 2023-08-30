<!DOCTYPE html>
<!--session-->
<?php 
require_once("config.php");
if(!isset($_SESSION["login_sess"])){
    header("location:login.php");
}
$email=$_SESSION["login_email"];
$query3="select * from `client` where email='$email'";
$findresult=mysqli_query($conn,$query3);
if($res=mysqli_fetch_array($findresult)){
    $username=$res['username'];
    $fname=$res['fname'];
    $lname=$res['email'];
}?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myaccount</title>
    <!--here we have to get the details through session-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
            <form action="login_process.php" method="post">

            welcome
            <table class="table">
            <tr>
                <th>First name</th>
                <td><?php echo $fname;?>
            </tr>
            <a href="logout.php">logout</a>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>