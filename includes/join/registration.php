<?php

    include("database.php");

    if(isset($_POST["register-submit"])){

     session_start();

     $name = $_POST["name"];
     $username = $_POST["username"];
     $email = $_POST["email"];
     $password1 = $_POST["password"];
     $password2 = $_POST["confirmpass"];

     if (empty($name) || empty($username) || empty($email) || empty($password1) || empty($password2) ){

            header("Location:registration.php?error=All Fields Are Empty");  //avoid unfill fields
            exit();
     }
     $conn_e = "SELECT * FROM users WHERE email='".$email."'";
     $rel_e = mysqli_query($conn,$conn_e);
       if(mysqli_num_rows($rel_e) > 0){
         header("Location:registration.php?error=This Email is Already Use");  //avoid more than 1 email in the database
         exit();
       }
       if($password1 != $password2){
         header("Location:registration.php?error=Passwords Donot match");
         exit();
       }
       if ($password1 == $password2){
         $password_hash = password_hash($password1, PASSWORD_DEFAULT);
         $sql = "INSERT INTO users (fullname,username,email,password) VALUES('".$name."','".$username."','".$email."','".$password_hash."')";
         $row =mysqli_query($conn,$sql);

          if($row){
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header("Location:index.php?register=successfull");  //put the home link
          }
          else{
            header("location:registration.php?error=My sql error");
            exit();
          }

       }

    }


 ?>


<!DOCTYPE html>
<html>
<head>
     <title> registration</title>
     <link rel="stylesheet" href="register.css">
     <link rel="stylesheet" href="bootstrap-4.5.0-dist\css\bootstrap.min.css">
     <link rel="stylesheet" href="bootstrap-4.5.0-dist\js\bootstrap.min.js">
</head>
<body>

        <div class="container">
              <div class="row">

                     <div class="col-md-5 offset-md-4">

                       <form class="" action="registration.php" method="POST">

                            <h1 class="text-center text-primary">REGISTER USER</h1>
                            <div class="form-group">
                                <p class="text-center text-warning">
                                    <?php
                                         if(isset($_GET['error'])){   //error when field not fill complet code
                                           echo $_GET['error'];
                                         }

                                     ?>

                                </p>

                            </div>

                             <div class="form-group">

                                <label for="name">Full Name</label>
                                <input type="text" name="name" value="" class="form-control" placeholder="Enter your name"/>

                             </div>

                             <div class="form-group">

                                <label for="username">User Name</label>
                                <input type="text" name="username" value="" class="form-control" placeholder="Enter you username"/>

                             </div>


                             <div class="form-group">

                                <label for="name">Email</label>
                                <input type="email" name="email" value="" class="form-control" placeholder="Enter your email"/>

                             </div>

                             <div class="form-group">

                                <label for="password">Password</label>
                                <input type="password" name="password"  class="form-control" placeholder="Enter password"/>

                             </div>

                             <div class="form-group">

                                <label for="confirmpass">Confirm Password</label>
                                <input type="password" name="confirmpass" class="form-control" placeholder="Confirm password"/>

                             </div>

                             <div class="form-group">

                                   <input type="submit" name="register-submit" value="Register" class="btn btn-block bg-primary">

                             </div>

                             <div class="form-group text-center">
                                <p>Already a member ?

                                   <a href="login.php" > Login Here </a>

                                </p>

                             </div>


                       </form>



                     </div>

              </div>




        </div>

























</body>
</html>
