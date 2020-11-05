<?php
    $host_name="localhost";
    $user_name="root";
    $password="";
    $db="demo";

    $conn=mysqli_connect($host_name,$user_name,$password);
    mysqli_select_db($conn,$db) ;

    if(isset($_POST['username'])){
        $uname=$_POST["username"];
        $password=$_POST["password"];

        $sql="select * from loginform where username='$uname' AND password='$password' limit 1";
         
        $result=mysqli_query($conn,$sql);

        if(!$result || mysqli_num_rows($result)==0){
            echo "You are successfully logged in";
            exit();

        }
        else 
        {
            echo "You have entered wrong details";
            exit();
        }
    }



?>







<!doctype html>
<html lang="en">
  <head>
    <title>Login Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="index.css">
</head>
  <body>
      <div class="container bg-dark mt-4">
        <div class="icon text-center">
         <img src="./images/user.png" style="width: 10rem; height: 10rem;" >
        </div>
        <form method="POST" action="#">

         <div class="form-group mt-4">
           <span class="input-icon pl-2 pt-2"><i class="fad fa-user fa-lg"></i></span>
           <input class="form-control pl-5" name="username" type="text" placeholder="Enter the User Name">
         </div>
         <div class="form-group mt-4">
          <span class="input-icon pl-2 pt-2"><i class="fas fa-lock fa-lg"></i></span>
          <input class="form-control pl-5" name="password" type="password" placeholder="Enter the Password">
        </div>
        <div class="login text-center">
        <button class="btn btn-success">Login</button>
      </div>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>