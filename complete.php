<?php
session_start();
echo $_SESSION["uname"];
$em=$_SESSION["uname"];
    $s ="localhost:3306";
    $u = "root";
    $pw = "";
    $dt = "akanksha";
    $con= new mysqli($s,$u,$pw,$dt);
    $display=mysqli_query($con,"Select * from login where email='$em'");
    while ($row12 = mysqli_fetch_array($display)) {
     
         
          ?>
          <img src=" <?php  echo $row12["photo"]; ?> ">
          <?php
      
    }
    ?>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }
        .container {
            background-color: #ffffff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .logo img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-left:auto;
  margin-bottom: 10px;
}

 img {
  <img align="right">;
  width: 50 px;
  height: 50px;
  border-radius:20%;
  margin-left:1300px;
  margin-bottom: 0px;
  
}

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <input type="button" value=" Back &#8592;" onclick="history.back()">
    <div class="container">
        <h1>Add New Trainee Form</h1><br/>
        <form action="http://localhost/Akanksha/complete.php" method="post">
            <label>Trainee Name</label>
            <input type="text" placeholder="Enter Name" name="name" required><br>
            <label>Branch Name</label>
            <input type="text" placeholder="Enter Branch Name" name="branch" required><br>
            <label>College Name</label>
            <input type="text" placeholder="Enter College Name" name="college" required><br>
            <label>Email</label>
            <input type="text" placeholder="Enter Email" name="email" value="<?php echo $_SESSION["uname"] ?>" required><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST["submit"])) 
{
if($_POST["name"]!="")
{
$un = $_POST["email"];
$na=$_POST["name"];
$brch=$_POST["branch"];
$col=$_POST["college"];
$dis=mysqli_query($con,"insert into train (name,branch,college,email) values ('$na','$brch','$col','$un')");
if($dis)
{
    echo "record inserted succesfully";

}
}
}
?>
