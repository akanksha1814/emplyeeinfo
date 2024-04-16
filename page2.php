<!DOCTYPE html>
<html>
<head>
    <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.navbar {
  background-color: #353069;
  color: #fff;
  padding: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.nav-list {
  list-style-type: none;
  margin: 10px 0;
  padding: 0;
  display: flex;
  flex-direction: column;
}

.nav-list li {
  margin-bottom: 10px;
}

.nav-list a {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
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
  margin-left:1200px;
  margin-bottom: 0px;
  
}
input[type="text"] {
  padding: 8px;
  border: none;
  border-radius: 3px;
}

.btn {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  padding: 8px 15px;
  cursor: pointer;
}

footer {
  text-align: center;
  padding: 20px;
  background-color: #353069;
  color: #fff;
}

footer p {
  margin: 0;
}
    </style>
</head>
<body>
<input type="button" value=" Back &#8592;" onclick="history.back()">
    <?php
    session_start();
    echo "Hello", "  ", $_SESSION["uname"];
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
    <nav class="navbar background">
        <div class="logo">
        <img src="images.png">
        </div>
        <ul class="nav-list">
            <li><a href="http://localhost/Akanksha/complete.php">Complete Your Registration</a></li>
            <li><a href="http://localhost/Akanksha/display.php">Display Information</a></li>
            <li><a href="http://localhost/Akanksha/feedback.php">Post Feedback</a></li>
            <li><a href="http://localhost/Akanksha/homepagee.html">Logout</a></li>
        </ul>
        <div class="rightNav">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
    </nav>
    <footer>
        <p>&copy; 2023 Tata Steel Limited</p>
    </footer>
</body>
</html>
