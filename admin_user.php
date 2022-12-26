<?php
include('connect.php');
session_start();
?> 


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Home</title>
    <link rel="stylesheet" type="text/css" href="ssss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
         .card{
    float: left;
    margin: 50px;
    left: 400px;
    top: 220px;
    background-color: rgba(136, 0, 255, 0.541) ;
}
        /* .card button{
            color: white
        } */
        .bundle{
            text-align: center;
        } 
        h2{
            color:pink;
        }
    </style>
</head>
<body>
   
    <!-- <div class="banner" align="center"><h3>For Admin</h3>
    <button type="submit" class="btn btn-primary" id="change" name="sub"><a href="admin_login.php">Admin Login</button>
</div>

    <div class="banner" align="center"><h3>For User</h3>
    <button type="submit" class="btn btn-primary" id="change" name="sub"><a href="user_index.php">User Login</button>
</div>


    <div class="footer">
        <h2 align="center">Aandu Pandu</h2>
    </div> -->
    <h2> <center>Welcome TO Blood Bank Mangement System</center> </h2>
        <div class="bundle">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h3>For Admin
      </h3>
      <br>
    <!-- <button type="submit" class="btn btn-success" id="change" name="sub"><a href="admin_login.php">Admin Login</a></button> -->
    <button><a href="admin_login.php">Click Here</a></button>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h3>For User</h3>
  <br>
  <button><a href="user_index.php">Click Here</a></button>
  </div>
</div>
</div>
</body>
</html>