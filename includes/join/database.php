<?php

       $host = "localhost";
       $dbusername = "root";
       $password = "";
       $dbname = "bus system";



       $conn = new mysqli($host,$dbusername,$password,$dbname);

if ($conn)
  {
    echo "working";
  }

else{
  die("Connection failed: ".mysqli_connect_error());
}




















 ?>
