<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        #main{
            box-shadow:  3px 3px 7px 9px rgba(0, 0, 0, 0.1);
        }
        .btn {
            background-color: #007bff; /* Initial background color */
            color: #fff; /* Text color */
            transition: background-color 0.3s ease; /* Transition property */
        }
        .btn:hover {
            background-color: #28a745; /* New background color */
        }
        .errmsg{
            margin:2px auto;
            border-radius:5px;
            background:pink;
            text-align:left;
            color:brown;
            padding:1px;
        }
        body{
            background-image: url('Screenshot from 2023-08-17 07-39-22.png');
            background-size: cover;
        }
        #main{
            background-color:white;
        }

    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4 mt-5" id="main">
                <div class="container">
                <center>
                <img class="img-fluid" src="Screenshot from 2023-08-11 10-21-27.png">
                </center>
                <?php
                if(isset($_GET['loginerror'])){
                    $loginerror=$_GET['loginerror'];
                }
                if(!empty($loginerror)){echo '<p class="errmsg">Invalid login credentials,please Try Again...<p>';}?>

                <br>
                <form action="home.php" method="post">
                <div class="mb-3" id="main">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php if(!empty($loginerror)){
                        echo $loginerror;
                    }?>" >
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <br>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <br>
      <center>
  <button type="submit" class="btn btn-primary" name="login" >login</button></center>
  <br>
  <p> Don't have account?<a href="signup.php">sign-up</a><p>
</form>
                </div>
            </div>
            <div class="col-sm-4">
            </div>

        </div>

     </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>