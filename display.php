<?php
session_start();
echo  "hello"," ",$_SESSION["uname"];
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
<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
  }

  h1 {
    text-align: center;
    margin-top: 20px;
  }
  img {
  <img align="right">;
  width: 50 px;
  height: 50px;
  border-radius:20%;
  margin-left:1400px;
  margin-bottom: 0px;
}

  table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
    background-color: #ffffff;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  }

  th, td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #007bff;
    color: #ffffff;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>
<input type="button" value=" Back &#8592;" onclick="history.back()">
    <div class="container">

<h1>
<?php
$u = "root";
$pw = "";
$dt = "akanksha";
$s = "localhost:3306";
$mysqli = new mysqli($s, $u, $pw, $dt);
if ($mysqli) {
    echo "Database connected";
}
?>
</h1>

<table border="1">
    <tr>
        <th>User Name</th>
        <th>Branch</th>
        <th>College</th>
        <th>Email</th>
    </tr>

    <?php
    $s = "localhost:3306";
    $u = "root";
    $pw = "";
    $dt = "akanksha";
    $con = new mysqli($s, $u, $pw, $dt);
    $x = $_SESSION["uname"];
    $res = mysqli_query($con, "SELECT * FROM train where email = '$x'");
    ?>

    <?php
    while ($row12 = mysqli_fetch_array($res)) {
        ?>
        <tr>
            <td><?php echo $row12["name"]; ?></td>
            <td><?php echo $row12["college"]; ?></td>
            <td><?php echo $row12["branch"]; ?></td>
            <td><?php echo $row12["email"]; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>
