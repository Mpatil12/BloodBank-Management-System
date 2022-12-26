<?php
$db=new PDO('mysql:host=localhost:3306;dbname=project','root','');
// if($db)
// {
//     echo "Connected";
// }
// else
// {
//     echo "Not connected";
// }

if(isset($_POST['sub']))
{
 $email=$_POST['email'];
 $number=$_POST['mno'];

 $q=$db->prepare("SELECT * FROM registration where email='$email' && mno='$number'");
 $q->execute();
 $res=$q->fetchAll(PDO::FETCH_OBJ);
 if($res)
 {
    header("location: donor-home.php");
    // echo "<script>
    //           alert('login');
    //       </script>";
 }
 else
 {
    //  header("location: home.php");
    // echo "<script>
    //           alert('Wrong user');
    //       </script>";
  }

}

?>

