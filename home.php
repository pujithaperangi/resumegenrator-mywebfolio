


<!DOCTYPE html>
<?php
session_start();
require_once("config.php");

if(isset($_POST['login'])){
    $login=$_POST['email'];
    $password=$_POST['password'];
    $query2="select * from `client` where (`username`='$login' OR email='$login')";
    $res=mysqli_query($conn,$query2);
    $numRows=mysqli_num_rows($res);
    if($numRows==1){
        $row=mysqli_fetch_assoc($res);
        if(password_verify($password,$row['password'])){
            $_SESSION["login_sess"]="1";
            $_SESSION["login_email"]=$row['email'];
            header("Location:home.php");
        }
        else{
            header("location:login.php?loginerror=".$login);
        }

    }
    else{
        header("location:login.php?loginerror=".$login);
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mywebfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<style>
    #cardheader{
        background-color:#a5a8ad;
    }
    a {
        text-decoration: none; 
        color:black;
    }
    /*footer*/
.panel1{
    width:100%;
    height:25px;
    background-color: rgb(100, 95, 95);
   
    text-align: center;
}
footer{
    margin-top: 15px;
}
.panel2{
    background-color: rgb(78, 68, 68);
    color:aliceblue;
    display:flex;
    justify-content: space-around;
    height:120px;
    padding:50px;
}
.panel3{
   
    text-align:center;
     background-color: rgb(26, 25, 25);
}
.panel4{
    text-align:center;
    background-color: rgb(26, 25, 25);
    font-family:Arial, Helvetica, sans-serif;
    color:white;
    height:80px;
    
}
body{
    background-color:#b5a28b;
}

</style>

</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-md">
    <!--logo-->
    <a href="#" class="navbar-brand ms-2"><img src="Screenshot from 2023-08-11 10-21-27.png" width="" class="img-fluid"></a>

    <!--toggler button-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="menu">
        <ul class="navbar-nav ms-auto">
            <li class=" dropdown nav-item">
                <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">Info</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"></li>
                    <li class="dropdown-item"><a href="#footer">About Us<a></li>
                    <li class="dropdown-item">Contact Us</li>
                </ul>

            </li>
            <li class="nav-item">
                <a href="#" class="nav-link active"><i class="bi bi-file-earmark-text"></i>My Resume</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link active"><i class="bi bi-person-circle"></i>profile</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link active"><i class="bi bi-box-arrow-left"></i>logout</a>
            </li>
        </ul>
    </div>

</nav>
<br>
<!--corousel-->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
<ol class="carousel-indicators">
<li class="active" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"></li>
<li data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"></li>
<li data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"></li>
</ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval=1000">
      <img src="Screenshot from 2023-08-16 23-31-17.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="Screenshot from 2023-08-16 23-30-53.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="Screenshot from 2023-08-16 23-31-47.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>






<!--body-->
<div class="container">
              
            
 
    
            <div class="card  mt-5 ml-5">
                
                    
                    <div class="card-header" id="cardheader">




                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><p class="h3">  create new resumes <i class="bi bi-pencil-square"></i></p></a>

                <div class="offcanvas offcanvas-start bg-info" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Templates</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">


                <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">Template 1</div>
                    <a href="templates.php">classic</a>
                    </div>
                    <span class="badge bg-primary rounded-pill">1</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">Template 2</div>
                    <a href="">pro</a>
                    </div>
                    <span class="badge bg-primary rounded-pill">0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">Template 3</div>
                    <a href="">Expert</a>
                    </div>
                    <span class="badge bg-primary rounded-pill">0</span>
                </li>
            </ol> 

           
  </div>
</div>

                        








                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Full Stack Web Developer</h5>
                        <p class="card-text">Proficient in front-end technologies such as HTML, CSS, JavaScript, and modern frameworks like React or Vue.js.
Experienced in back-end development with languages like Node.js, Python, Ruby, or Java, and frameworks such as Express, Flask, Ruby on Rails, or Spring Boot.</p>
                        <a href="#" class="btn btn-sm btn-dark" ><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-trash-fill"></i></a>
                        <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-eye-fill"></i></a>
                    </div>

                    

                    
                    <div class="card my-3">
                        <div class="card-body">
                            <h1 class="text-center text-muted"><i class="bi bi-file-earmark-person"></i>Curriculum Vitae</h1>
                        </div>
                    </div>
            </div>
</div>

<br><br>
<!--footer-->
<footer >
    <a name="footer"></a>
        <div class="panel1">
            <a href="#" style="text-decoration: none; color:rgb(24, 26, 25);">Back to Top</a>
        </div>
        <div class="panel2"  >
            
            <ul>
               <p style="font-weight:900">Get to Know Us</p>
                <p>Careers</p>
                <p>Blog</p>
                <p>About</p>
            </ul>

            <ul>
                <p style="font-weight:900">Make Money with Us</p>
                <p>Creating profiles</p>
                <p>publish</p>
                <p>affiliate</p>
                <p>apps</p>
            </ul>

            <ul>
                <p style="font-weight:900">Let us know</p>
                <p>mywebfolio.com</p>
                <p>contact us</p>
                <p> <i class="bi bi-envelope-at"></i>mywebfolio@gmail.com<p>
                <p><i class="bi bi-linkedin"></i>linkedin</p>
                
            </ul>

        </div>
        <br>
        <br><br><br><br><br>
        <hr><hr>
        
        <div style="background-color:white" >

            <center>
                <img src="Screenshot from 2023-08-11 10-21-27.png">
                <br>
                

            </center>
            <marquee><i class="bi bi-emoji-smile-fill"></i>Thank You For Using Our Services<i class="bi bi-emoji-smile-fill"></i></marquee>

        </div>
        
        
</footer>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>