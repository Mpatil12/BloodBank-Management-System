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
    <link rel="stylesheet" type="text/css" href="s11.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        /* .dh{
             
            padding: 100px; 
            margin-left: 225px;
            
        } */
        .card{
            float: left;
            margin: 50px;
            left: 400px;
            top: 220px;
            background-image: linear-gradient(to right, rgb(88, 4, 96), rgb(211, 25, 81));
            padding:20px;
            color:aqua;
            shadow:2px 2px black;
        }
        /* .card button{
            color: white
        } */
        .bundle{
            text-align: center;

        } 
        a{
            text-decoration:none;
        }
    h2{
        color:pink;
        top: 5px;
    }
    </style>
    <title>Admin Login</title>
</head>
<body>
     <h2> <center>Blood Bank Management</center>  </h2>
<div class="bundle">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h3>Stock Blood &nbsp; List</h3>
    <!-- <button type="submit" class="btn btn-success" id="change" name="sub"><a href="admin_login.php">Admin Login</a></button> -->
    <button><a href="stock-blood.php">Enter</a></button>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h3>Collect Blood &nbsp; Bottle</h3>
  <button><a href="exchange-blood-list.php">Enter</a></button>
  </div>
  
</div>
</div>
<div id="footer">
     <button type="button" class="btn btn-info" id="logout" ><a href="admin_user.php">Log out</a></button>
 </div>
</body>
</html>