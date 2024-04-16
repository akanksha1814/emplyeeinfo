<?php
//***********************************Image Code */
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
//*******************************close image code */
$s ="localhost:3306";
$u = "root";
$pw = "";
$dt = "akanksha";
$con= new mysqli($s,$u,$pw,$dt);
$un = $_POST["username"];
$pw1= $_POST["pwd"];
$cpw1 = $_POST["cpwd"];
$em=$_POST["email"];
//$ph=$_POST["photo"];
if ($pw1 != $cpw1)
{
    echo "<script>alert('Password cannot be admin')</script>";
}
else 
{
$dis=mysqli_query($con,"insert into login (username,email,pwd,photo) values ('$un','$em','$pw1','$target_file')");
if($dis)
{
    echo "record inserted succesfully";
}
} 
?>
