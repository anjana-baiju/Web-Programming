<?php
session_start();
$sname="117.232.108.36";
$uname="mca2014";


$pswd="password14";

$dbname="dbmca2014";

$conn=new mysqli($sname,$uname,$pswd,$dbname);

if($conn->connect_error)
  die("Connection failed: ">$conn->connect_error);


if(isset($_POST['submit']))
{
        $user=$_POST['username'];
        $pswd=$_POST['password'];
        $sql=mysqli_query($conn,"select * from login where username='$user' and password='$pswd'");

        if(mysqli_num_rows($sql)>0)
        {
                $_SESSION['login_user'] = $user;

         header("location:welcome.php");
        }

        $sql=mysqli_query($conn,"select * from login where password='$pswd'");
        if(mysqli_num_rows($sql)>0)
        {

                echo "<script>alert('Incorrect Username!!!!!!!!!!!');</script>";
                echo '<script type="text/javascript">
                location.replace("php5.php");
                </script>';
        }
 else
        {
                $sql=mysqli_query($conn,"select * from login where username='$user'");
                if(mysqli_num_rows($sql)>0)
                {
		echo "<script>alert('Incorrect Password!!!!!!!!!!!');</script>";
                        echo '<script type="text/javascript">
                        location.replace("php5.php");
                        </script>';
                }
        }

}
 ?>

