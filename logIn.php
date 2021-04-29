<?php 

session_start();
//header('location:AignInUp.php');

//$con = mysqli_connect('localhost', 'root', '', 'register');
$con = new mysqli('localhost', 'root', '', 'register');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  //echo "Connected successfully";


$E_mail = $_POST['E_mail'];
$Password = $_POST['Password'];

$s ="select * from users where E_mail ='$E_mail' && Password = '$Password'";

$result = mysqli_query($con,$s);

$count =mysqli_num_rows($result);

if($count == 1){
    if($result->num_rows>0){
        while($row =$result->fetch_assoc()){
            $name =$row['UserName'];
            $password = $row['Password'];
            $e_mail = $row['E_mail'];
        }
    }
    $_SESSION['username']= $name;
    $_SESSION['E_MAIL']= $e_mail;
    $_SESSION['PASSWORD']= $password;
    header('location:home.php');
}
else{
    header('location:signin.php');
}
$con->close();
?>