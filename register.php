<?php 

session_start();
header('location:signin.php');

//$con = mysqli_connect('localhost', 'root', '', 'register');
$con = new mysqli('localhost', 'root', '', 'register');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  //echo "Connected successfully";

$UserName = $_POST['UserName'];
$E_mail = $_POST['E_mail'];
$Password = $_POST['Password'];

$s ="select * from users where E_mail ='$E_mail'";

$result = mysqli_query($con,$s);

$count =mysqli_num_rows($result);

if($count == 1){
    echo"E Mail Already Taken";
}
else{
    $reg = "INSERT INTO users(UserName, E_mail, Password) VALUES ('$UserName','$E_mail','$Password')";
    mysqli_query($con,$reg);
    echo"Registered successfuly";
}
$con->close();
?>