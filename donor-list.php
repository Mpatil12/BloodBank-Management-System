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
    <title>Donor List</title>
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
            // ?>

            <style>
                h1{
                    color:aqua;
                }
            </style>
            <h1>Donor List </h1>
            <center><div id="form">
                <!-- <form action="" method="post"> -->
                    <table>
                        <tr>
                            <td><center><b><font color="black">Name</font></b></center></td>
                            <td><center><b><font color="black">Father's Name</font></b></center></td>
                            <td><center><b><font color="black">Address</font></b></center></td>
                            <td><center><b><font color="black">City</font></b></center></td>
                            <td><center><b><font color="black">Age</font></b></center></td>
                            <td><center><b><font color="black">Blood Group</font></b></center></td>
                            <td><center><b><font color="black">Mobile No</font></b></center></td>
                            <td><center><b><font color="black">E-Mail</font></b></center></td>
                        </tr>
                        <?php
                        $q=$db->query("SELECT * FROM registration");
                        while ($r1=$q->fetch(PDO::FETCH_OBJ))
                         {  
                        ?>
                        <tr>
                        <td><center><?=$r1->name;?></center></td>
                        <td><center><?=$r1->fname;?></center></td>
                        <td><center><?=$r1->address;?></center></td>
                        <td><center><?=$r1->city;?></center></td>
                        <td><center><?=$r1->age;?></center></td>
                        <td><center><?=$r1->bgroup;?></center></td>
                        <td><center><?=$r1->mno;?></center></td>
                        <td><center><?=$r1->email;?></center></td>
                        
                        </tr>
                        <?php
                        }
                        ?>
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

    <div>
       <form action="" method="post">
                    <table>
                    <tr>
                        <td width="200px" height="50px">Search</td>
                        <td width="200px" height="50px"><input type="text" name="sname" placeholder="Enter Name"></td>
                        <td><button name="sss">Search</button></td>
                    </tr>
                    </table>
            </form1>
            <?php
                                if(isset($_POST['sss']))
                                { 
                                        $name=$_POST['sname'];
                                        $q=$db->query("SELECT * FROM registration where name='$name'");
                                    
                                        while ($r1=$q->fetch(PDO::FETCH_OBJ))
                                         {  
                                        ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp; <span style="color:white"><?=$r1->name;?></span> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="color:white"><?=$r1->fname;?></span> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="color:white"><?=$r1->address;?></span> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="color:white"><?=$r1->city;?></span> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="color:white"><?=$r1->age;?></span> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="color:white"><?=$r1->bgroup;?></span> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="color:white"><?=$r1->mno;?></span> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="color:white"><?=$r1->email?></span> &nbsp;&nbsp;&nbsp;&nbsp;
                                        </tr>
                                        <?php
                                    }
                                    
                                }
                                
                                
                                // else
                                // {
                                //     echo "<script>
                                //     alert('Wrong user');
                                //     </script>";
                                // }
                                    
            ?>
       </div>
</body>
</html>

