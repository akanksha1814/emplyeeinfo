<?php
session_start();
$_SESSION["uname"]="";
$s ="localhost:3306";
$u = "root";
$pw = "";
$dt = "akanksha";
$con= new mysqli($s,$u,$pw,$dt);
if ($con)
{
    echo("database is connected");
}
$un = $_POST["username"];
$pw= $_POST["pwd"];
$em=$_POST["email"];
$dis=mysqli_query($con,"select * from login where username ='$un'and pwd= '$pw'");
if($dis->num_rows >0)
 {
    $_SESSION["uname"]=$em;
    header("Location: page2.php");
}
else {
    echo "<script>alert('Invalid username or password')</script>";
}
?>