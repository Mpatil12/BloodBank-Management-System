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
    <style type ="text/css">
        td{
            width : 200px;
            height: 20px;
        }

    </style>
    <title>Donor Registration</title>
</head>
<body>
     
    <div id="full">
       <div id="inner_full">
        <div id="header"><h2><a href="home.php" style="text-decoration:none;color: pink;">Blood Bank Management System</a></h2></div>
        <div id="body">
            <br>
            <?php
            // $un = $_SESSION['un'];
            // if(!$un)
            // {
            //     header("Location:index.php");
            // }
            ?>
            <style>
                h1{
                    color:aqua;
                }
            </style>
            <h1>Blood List</h1>
            <center><div id="form">
                <!-- <form action="" method="post"> -->
                    <table>
                        <tr>
                            <td><center><b><font color="black">Name</font></b></center></td>
                            <td><center><b><font color="black">Qnty</font></b></center></td>  
                        </tr>
                        
                        <tr>
                        <td><center>O+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM registration WHERE bgroup='O+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                        </tr>

                        <tr>
                        <td><center>A+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM registration WHERE bgroup='A+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                        </tr>

                        <tr>
                        <td><center>AB+</center></td>
                        <td><center>
                        <?php
                            $q=$db->query("SELECT * FROM registration WHERE bgroup='AB+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                        </tr>
                        <tr>
                        <td><center>A-</center></td>
                        <td><center>
                        <?php
                            $q=$db->query("SELECT * FROM registration WHERE bgroup='A-'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                        </tr>
                        <tr>
                        <td><center>B-</center></td>
                        <td><center>
                        <?php
                            $q=$db->query("SELECT * FROM registration WHERE bgroup='B+'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                        </tr>
                        <tr>
                        <td><center>O-</center></td>
                        <td><center>
                        <?php
                            $q=$db->query("SELECT * FROM registration WHERE bgroup='O-'");
                            echo $row=$q->rowcount();
                            ?>
                        </center></td>
                        </tr>
                        <tr>
                        <td><center>AB-</center></td>
                        <td><center><?php
                            $q=$db->query("SELECT * FROM registration WHERE bgroup='AB-'");
                            echo $row=$q->rowcount();
                            ?></center></td>
                        </tr>
                       
                    </table>
                
            </div></center>
        </div>
        <!-- <div id="footer"><h4 align="center">Copyright@bloodbank</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div> -->
        <div id="footer">
        <button type="button" class="btn btn-info" id="logout" ><a href="admin_user.php">Log out</a></button>
        </div>

       </div>
    </div>
</body>
</html>