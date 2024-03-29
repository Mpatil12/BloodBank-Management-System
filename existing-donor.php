<?php
include('connect.php');
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a823132034.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Existing Donor</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-success" style="background-color: white;">
        <a class="navbar-brand" href="#" style="margin-left: 3%;">Blood Bank Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 15%; padding:0%">
            <ul class="navbar-nav" style="margin-left:35%;">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-login.php">Admin Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User Section
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="user-login.php">User Login</a>
                        <a class="dropdown-item" href="user-signup.php">User Registration</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adlogout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <form action="" method="post">
        <div class="transbox">
            <div class="container-xxl">
                <h6>DONOR DETAILS</h6>
                <div class="box">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="box">
                    <i class="fa fa-key"></i>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="box">
                    <i class="fa-solid fa-droplet"></i>
                    <select name="bgroup" class="bgroup">
                        <option>Blood Group</option>
                        <option>O+</option>
                        <option>AB+</option>
                        <option>A+</option>
                        <option>B+</option>
                        <option>O-</option>
                        <option>AB-</option>
                        <option>A-</option>
                        <option>B-</option>
                    </select>
                </div>
                <div class="button">
                    <input type="submit" name="sub" id="button" value="Login">
                </div>
                <!-- <button type="button" class="btn btn-info" name="sub" id="logout"><a href="" class="link">Log In</a></button> -->
            </div>
        </div>
    </form>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: url(img/blood-hand.jpg) no-repeat center center fixed;
            background-size: cover;
        }

        .bgroup {
            border-radius: 10px;
            width: 120px;
            height: 30px;
            text-align: center;
        }

        #button {
            border-radius: 8px;
            font-size: larger;
            font-weight: bold;
            width: 80px;
        }

        .button {
            margin-left: 90px;
            width: 80px;
        }

        .button :hover {
            cursor: pointer;
        }

        /* div.transbox {
            margin: 30px;
            background-color: #ffffff;
            border: 1px solid black;
            opacity: 0.6;
        } */

        .link {
            color: black;
        }

        .nav-link {
            color: black;
        }

        .nav-item:hover {
            background-color: orangered;
            color: black;
        }

        .nav-link:hover {
            color: black;
        }

        /* body {
            background: url(img/blood-hand.jpg) no-repeat center center fixed;
            background-size: cover;
            z-index: -1;
        } */

        .bg {
            width: 100%;
            position: absolute;

            height: 100%;
        }

        .container-xxl {
            position: absolute;
            top: 22%;
            left: 40%;
            width: 30%;
            height: 50%;
        }

        .container-xxl h6 {
            font-family: 'Heebo', sans-serif;
            width: 80%;
            display: inline-block;
            font-size: 40px;
            border-bottom: 5px solid red;
            /* margin-bottom: 15px; */
            margin: 35px 15px 15px 30px;

        }

        .box {
            width: 100%;
            margin: 22px 0px;
            /* margin: auto; */
            /* border-bottom: 2px solid red; */
        }

        .box input {
            color: black;
            /* background: none; */
            width: 75%;
            padding: 5px 10px;
            font-size: 20px;
            border-radius: 10px;
            /* border: none;
            outline: none; */
        }

        .btn {
            color: black;
            cursor: pointer;
            outline: none;
            margin: 10px 100px;
            padding: 10px 21px;
            border: 2px solid red;
            border-radius: 10px;
            font-size: 18px;
            opacity: 0.8;
            background: white;
            font-weight: bold;
        }

        .box i {
            width: 25px;
            text-align: center;
        }

        .btn:hover {
            opacity: 0.5;
            color: purple;
            background: white;

        }
    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- <div id="full">
        <div id="inner_full">
            <div id="header">
                <h2><a href="index.php" style="text-decoration:none;color: pink;">Blood Bank Management System</a></h2>
            </div>
            <div id="body">
                <br> -->

    <!-- <style>
                    h1 {
                        color: aqua;
                    }
                </style>
                <h1>Blood Donation</h1>
                <center>
                    <div id="form1">
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td width="200px" height="50px">Enter E-mail</td>
                                    <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail"></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Enter Mobile No.</td>
                                    <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No."></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Select Blood Group</td>
                                    <td width="200px" height="50px">
                                        <select name="bgroup">
                                            <option>O+</option>
                                            <option>AB+</option>
                                            <option>A+</option>
                                            <option>B+</option>
                                            <option>O-</option>
                                            <option>AB-</option>
                                            <option>A-</option>
                                            <option>B-</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="sub" value="Save"></td>
                                </tr>
                            </table>
                            </form1>



                    </div>
                </center>
            </div> -->
    <!-- <td width="200px" height="50px">Exchange Blood Group</td>
                        <td width="200px" height="50px">
                            <select name="exbgroup">
                                <option>O+</option>
                                <option>AB+</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>O-</option>
                                <option>AB-</option>
                                <option>A-</option>
                                <option>B-</option>
                            </select>
                        </td> -->

    <!-- <div id="footer"><h4 align="center">Copyright@bloodbank</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div> -->

    <!-- <div id="footer">
                <button type="button" class="btn btn-info" id="logout"><a href="admin-home.php">Log out</a></button>
            </div>
        </div>
    </div> -->



    <?php
    $op = 0;
    $ap = 0;
    $bp = 0;
    $abp = 0;
    $on = 0;
    $an = 0;
    $bn = 0;
    $abn = 0;


    if (isset($_POST['sub'])) {
        //front-end data input
        // $name=$_POST['name'];
        // $lname=$_POST['lname'];
        // $address=$_POST['address'];
        // $city=$_POST['city'];
        // $age=$_POST['age'];
        $bgroup = $_POST['bgroup'];
        $mno = $_POST['password'];
        $email = $_POST['email'];

        if ($bgroup == 'O+') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='O+'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $op = $row[2];
        } else if ($bgroup == 'A+') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='A+'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $ap = $row[2];
        } else if ($bgroup == 'B+') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='B+'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $bp = $row[2];
        } else if ($bgroup == 'AB+') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='AB+'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $abp = $row[2];
        } else if ($bgroup == 'O-') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='O-'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $on = $row[2];
        } else if ($bgroup == 'A-') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='A-'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $an = $row[2];
        } else if ($bgroup == 'B-') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='B-'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $bn = $row[2];
        } else if ($bgroup == 'AB-') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='AB-'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $abn = $row[2];
        }

        if ($bgroup == 'O+') {
            $op++;
            $sql1 = "UPDATE `bbp`.`stock_list` SET `quantity`='$op' WHERE `bgroup`='$bgroup'";
            $con->query($sql1);
        } else if ($bgroup == 'A+') {
            $ap++;
            $sql2 = "UPDATE `bbp`.`stock_list` SET `quantity`='$ap' WHERE `bgroup`='$bgroup'";
            $con->query($sql2);
        } else if ($bgroup == 'B+') {
            $bp++;
            $sql3 = "UPDATE `bbp`.`stock_list` SET `quantity`='$bp' WHERE `bgroup`='$bgroup'";
            $con->query($sql3);
        } else if ($bgroup == 'AB+') {
            $abp++;
            $sql4 = "UPDATE `bbp`.`stock_list` SET `quantity`='$abp' WHERE `bgroup`='$bgroup'";
            $con->query($sql4);
        } else if ($bgroup == 'O-') {
            $on++;
            $sql5 = "UPDATE `bbp`.`stock_list` SET `quantity`='$on' WHERE `bgroup`='$bgroup'";
            $con->query($sql5);
        } else if ($bgroup == 'A-') {
            $an++;
            $sql6 = "UPDATE `bbp`.`stock_list` SET `quantity`='$an' WHERE `bgroup`='$bgroup'";
            $con->query($sql6);
        } else if ($bgroup == 'B-') {
            $bn++;
            $sql7 = "UPDATE `bbp`.`stock_list` SET `quantity`='$bn' WHERE `bgroup`='$bgroup'";
            $con->query($sql7);
        } else if ($bgroup == 'AB-') {
            $abn++;
            $sql8 = "UPDATE `bbp`.`stock_list` SET `quantity`='$abn' WHERE `bgroup`='$bgroup'";
            $con->query($sql8);
        }

        $q = "SELECT * FROM `bbp`.`donor_reg` WHERE `email`='$email' && `mno`='$mno'";
        $result1 = mysqli_query($con, $q);

        if (!mysqli_fetch_row($result1)) {
            echo "<script>alert('Not Registered')</script>";
        } else {
            $result1 = mysqli_query($con, $q);
            $rown = mysqli_fetch_row($result1);
            $quantity = $rown[7];
            $quantity++;
            $q1 = "UPDATE `bbp`.`donor_reg` SET `quantity`='$quantity' WHERE `email`='$email' && `mno`='$mno'";
            $con->query($q1);
            echo "<script>alert('Donated Successfully')</script>";
        }
    }
    ?>
</body>

</html>