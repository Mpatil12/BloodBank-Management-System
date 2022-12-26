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

    <title>Admin Login</title>
</head>
<body>
     
    <div id="full">
       <div id="inner_full">
        <div id="header"><h2><a href="home.php" style="text-decoration:none;color: pink;">Blood Bank Management System</a></h2></div>
        <div id="body">
            <br>
            <?php
            
            ?>

            <ul>
                <li>
                    <img src="img/b.jpg" alt="" width="150px">
                    <br>
                    <button type="button" class="btn btn-primary"><a href="donor-red.php">Blood Donation</a></button>
                </li>
                <li>
                <img src="img/b.jpg" alt="" width="150px">
                    <br>    
                    <button type="button" class="btn btn-primary"><a href="donor-list.php">Donor List</a></button></li>
                <li>
                <img src="img/b.jpg" alt="" width="150px">
                    <br>    
                    <button type="button" class="btn btn-primary"><a href="stock-blood.php">Stock Blood List</a></button>
                </li>
            </ul> <br><br><br><br><br><br><br>
            <!-- <ul>
                <li>
                <img src="img/b.jpg" alt="" width="150px">
                    <br>
                    <button type="button" class="btn btn-primary"><a href="out-stoke-blood-list.php">Out Stock Blood List</a></button>    
                </li>
                <li>
                <img src="img/b.jpg" alt="" width="150px">
                    <br> 
                    <button type="button" class="btn btn-primary"><a href="exchange-blood-list.php">Exchange Blood Registration</a></button>   
                </li>
                <li>
                <img src="img/b.jpg" alt="" width="150px">
                    <br>
                    <button type="button" class="btn btn-primary"><a href="exchange-blood-red.php">Exchange Blood List</a></button>    
                </li>
               
            </ul> -->

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