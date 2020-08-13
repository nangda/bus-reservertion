
<?php
include("database.php");
session_start();
  if(isset($_SESSION['email'])){
    header("Location:home.php?resoan=you are already logined");
  }
  if(isset($_POST['login-submit'])){

      $email = $_POST['email'];
      $password1 = $_POST['password'];

      $conn_e = "SELECT * FROM users WHERE email='".$email."'";
      $rel_e = $conn->query($conn_e);

      if ( empty($email) || empty($password1) ){

             header("Location:login.php?error=All Fields Are Empty");  //avoid unfill fields
             exit();
      }
      else if(!mysqli_num_rows($rel_e) > 0){
          header("Location:login.php?error=Register first");  //avoid more than 1 email in the database
          exit();
  }

      else{
        while ($row = mysqli_fetch_array($rel_e)){
          $password1 = password_verify($password,$row['password'] );
          if($password){
            $_SESSION['name'] = $row['fullname'];
            $_SESSION['email'] = $email;
            header("Location:index.php?login=successfull&email=$email");
          }
          else{
            header("Location:login.php?error=Wrong Password");
            exit();
          }
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

                            <h1 class="text-center text-primary">Login Here</h1>
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

                                <label for="name">Enter Your Email</label>
                                <input type="email" name="email" value="" class="form-control" placeholder="Enter Username"/>

                             </div>



                             <div class="form-group">

                                <label for="confirmpass"> Password </label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password"/>

                             </div>

                             <div class="form-group">

                                   <input type="submit" name="login-submit" value="login" class="btn btn-block bg-primary">

                             </div>

                             <div class="form-group text-center">
                                <p>Not a member ?

                                   <a href="registration.php" > Register Here </a>

                                </p>

                             </div>


                       </form>



                     </div>

              </div>




        </div>


</body>
</html>
