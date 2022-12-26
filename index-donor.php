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
      /* form{
              background-color: red;
              text-align: center;
              padding: 10px;
            }
      .child{
        padding: 4px; */

        form{
              /* background-color: ; */
              background-image: linear-gradient(to left, #a00df4, #e6062f);
              margin-left: 31%;
              margin-top: 7%;
              border-radius: 10px;
              width: 450px;
              height: 250px;
              text-align: center;
              padding: 10px;
            }
      .child{
        margin-top: 20px;
        padding: 4px;
      }
      #change{
        margin: 5px;
      }
      #change a{
        color: white;
        text-decoration: none;
      }
      h2{
        color:pink;
      }
    </style>
    <title>Donor Login</title>
</head>
<body>
     
    <div id="full">
       <div id="inner_full">
        <div id="header"><h2>Blood Bank Management System</h2></div>
        <div id="index" class="index">
            <br><br><br><br><br>
            <form action="connect-donor.php" method="post">
            <div class="container">
              <div class="child">  
                <label for="email" class="">Email address</label>
                <input type="email" class="" name="email" id="email" placeholder="@gmail.com" >
              </div>
              <div class="child">
                <label for="number" class="">Moblie No.</label>
                <input type="number" class="" name="mno" id="number">
              </div>
              <button type="submit" class="btn btn-primary" id="change" name="sub"> <a href=""></a> Login</button>
              <!-- <button type="submit" class="btn btn-primary" id="change" name="sign in"><a href="donor-red.php">New User</a></button> -->
              
            </div>
            </form>
            <?php
                // if(isset($_POST['sub']))
                // {
                //     $un=$_POST['un'];
                //     $ps=$_POST['ps'];
                //     $q=$db->prepare("SELECT * FROM admin where uname='$un' && pass='$ps'");
                //     $q->execute();
                //     $res=$q->fetchAll(PDO::FETCH_OBJ);
                //     if($res)
                //     {
                //         $_SESSION['un']=$un;
                //         header("location: home.php");
                //     }
                //     else
                //     {
                //         echo "<script>alert('Wrong User')</script>";
                //     }
                //  $q=$db->prepare("INSERT INTO login (email,number) VALUES
                //  (:email,:number)");
                // }
            ?> 
        </div>
    </div>
    <div id="footer">
     <button type="button" class="btn btn-info" id="logout" ><a href="admin_user.php">Log out</a></button>
 </div>
</body>
</html>