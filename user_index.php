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
            background-image: linear-gradient(to left, #a00df4, #e6062f);
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
  <h3>For Existing User</h3>
    <!-- <button type="submit" class="btn btn-success" id="change" name="sub"><a href="admin_login.php">Admin Login</a></button> -->
    <button><a href="index-donor.php">Login</a></button>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h3>For New User</h3>
  <button><a href="donor-red.php">Sign Up</a></button>
  </div>
</div>

</div>

</body>
</html>















<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Home</title>
    <link rel="stylesheet" type="text/css" href="ssss.css">

    <style>
        #a{width:20%;height:10px;float:left}
        #b{width:20%;height:10px;float:left}
        #c{width:20%;height:10px;float:left}
        #d{width:20%;height:10px;float:left}
        #e{width:20%;height:10px;float:left}
    </style>
</head>
<body>
    <div class="header">
        <div class="logo"><h2>Blood Bank Management System</h2></div>
        <div class="nav">
            <div id="a"><a href="user_index.php">Home</a></div>
            <div id="b"><a href="about.php">About Us</a> </div>
            <div id="c"><a href="contact.php">Contact Us</a> </div>
            <div id="d"><a href="index-donor.php">Login</a> </div>
            <div id="e"><a href="donor-red.php">Sign UP</a> </div>

        </div>
    </div>
    <div class="banner" align="center"><h3>Blood Bank</h3></div>
    <div class="container">
        <br>
        <h2 align="center">Doctor's Information</h2>
        <center><table>
            <tr>
                <td width="200px" height="50px" height="50px"><center>Doctor's Name</center></td>
                <td width="200px" height="50px" height="50px"><center>Mobile No.</center></td>
                <td width="200px" height="50px" height="50px"><center>Address</center></td>
                <td width="200px" height="50px" height="50px"><center>Specialization</center></td>
            </tr>
            <tr>
                <td width="200px" height="50px" height="50px"><center>#</center></td>
                <td width="200px" height="50px" height="50px"><center>#</center></td>
                <td width="200px" height="50px" height="50px"><center>#</center></td>
                <td width="200px" height="50px" height="50px"><center>#</center></td>
            </tr>
        </table></center>
    </div>
    <div class="footer">
        <h2 align="center">Aandu Pandu</h2>
    </div>
</body>
</html> -->