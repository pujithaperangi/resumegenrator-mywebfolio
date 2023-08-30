<!DOCTYPE html>
<?php
//including the php file
require_once("config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>  #main{
            box-shadow:  3px 3px 7px 9px rgba(0, 0, 0, 0.1);
            background-color:white;
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
        
        
        </style>
       
    
        
</head>
<body>
    <div class="container">
        <div class="row">
        <?php
        //isset when the button is pressed
        if(isset($_POST['signup'])){
            extract($_POST);

            //checking whether already it exits or not
            $sql1 = "SELECT * FROM client WHERE (username='$username' OR email='$email')";
            $res = mysqli_query($conn, $sql1);

            if(mysqli_num_rows($res) > 0){
                $row = mysqli_fetch_assoc($res);
                if($username == $row['username']){
                    $error[] = 'Username already exists';
                }
                if($email == $row['email']){
                    $error[] = "Email already exists";
                }
            }

            //inserting values which are automatic and needs encryption into the table
            if(!isset($error)){
                $date = date('Y-m-d');
                $options = array("cost" => 4);
                $password = password_hash($password, PASSWORD_BCRYPT, $options);

                /*$result1 = mysqli_query($conn, "INSERT INTO `client `
                 VALUES('$fname', '$lname', '$username', '$email', '$password', '$date')");--->this isn't not working properly */
                 $query1="INSERT INTO `client` (`fname`, `lname`, `username`, `email`, `password`, `date`) VALUES ('$fname', '$lname', '$username', '$email', '$password', '$date')";
                 $result1 = mysqli_query($conn,$query1); 


                if($result1){
                    $done = 2;
                } else {
                    $error[] = 'Failed: Something went wrong';
                    
                        echo "Error: " . mysqli_error($conn);
                   
                }
            }
        }
        ?>

        <div class="col-sm-4">
            <?php
            //showing the error
            if(isset($error)){
                foreach($error as $error_msg){
                    echo '<p class="errmsg">&#x26A0;' . $error_msg . '</p>';
                }
            }
            ?>
        </div>

        <div class="col-sm-4 mt-5" id="main">
            <div class="container">
                <center>
                    <img class="img-fluid" src="Screenshot from 2023-08-11 10-21-27.png">
                </center>
            <?php

            //else part
            if(isset($done)){
                ?>
            

            <div ><center><span style="font-size:100px;"><img src="pngwing.com.png" width="100px"></span></center><br>
            you have registered successfully.<br>
            <a href="login.php" >Login </a></div>
            <?php }
                else { 

                    ?>

                     <div class="signup_form">
                    <form method="post" onsubmit="return validation()" action="">
                        <!-- Your form fields -->
                        <div class="mb-3">
                    <label for="fname" class="form-label" >First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                    <span  id="fnameer" style="color:red"></span>
                </div>

                <div class="mb-3">
                    <label for="lname" class="form-label" >Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                    <span  id="lnameer" style="color:red"></span>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label" >Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <span  id="usernameer" style="color:red">* required</span>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <span id="emailer" style="color:red">* required</span>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label" >Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <span  id="passworder" style="color:red">* required</span>
                </div>

                <div class="mb-3">
                    <label for="cnfpwd" class="form-label" >Confirm Password</label>
                    <input type="password" class="form-control" id="cnfpwd" name="cnfpwd">
                    <span  id="cfpwder" style="color:red">* required</span>
                </div>
                
      
                        <button type="submit" class="btn btn-primary" name="signup">Sign-Up</button>
                        <br>
                        <p>Ready to proceed! <a href="login.php">Login</a></p>
                    </form>
                
                </div>
                <?php   }  //close here we have to mention the same line ?>
            </div>
        </div>
        <div class="col-sm-4">
        </div>
        </div>
    </div>
    
    <script>
        function validation() {
            // Your validation code
            // ...

     const user = document.getElementById("username").value.trim();
        const userer = document.getElementById("usernameer"); // Corrected variable name

        const email = document.getElementById("email").value.trim();
        const emailer = document.getElementById("emailer");

        const pwd = document.getElementById("password").value.trim();
        const pwder = document.getElementById("passworder");

        const cfpwd = document.getElementById("cnfpwd").value.trim();
        const cfpwder = document.getElementById("cfpwder");

    //username
    if(user==""){
        document.getElementById("userer").innerHTML="*username can't be blank";
        return false;
    }
     if(user.length<=2){
        userer.innerText="too short";
        return false;
    }
    else{
        userer.innerText="";
    }

    //email
    const t=/^[a-zA-Z0-9*+-^!]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if(email==""){
        emailer.innerText="*email can't be blank";
        return false;
    }
    if(!(t.test(email))){
        emailer.innerText="*invalid email";
        return false;
    }
    else{
        emailer.innerText="";
    }

    
    //password
    const d=/[a-zA-Z0-9!@#$%^&*-+=]/;
    if(pwd==""){
        pwder.innerText="* can't be empty";
        return false;
    }
    if(!(d.test(pwd))){
        pwder.innerText="* include characters";
        return false;
    }
    else{
        pwder.innerText="";
    }

    //confirm password
    if(pwd!=cfpwd){
        cfpwder.innerText="* incorrect password";
        return false;
    }
    else{
        cfpwder.innerText="";
    }

            return true; // Allow form submission if validation passes
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
