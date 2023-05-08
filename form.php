
<?php
   ob_start();
   session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php

$nameErr = $emailErr = $passErr="";
$name = $email =  $pass =" ";
$Rname = $Rpass  = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
   
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<h2>PHP Form Validation Example</h2>


<p><span class="error">* required field</span></p>
<form method="post" action="user.php"> 
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="pass" >
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
 
  <br><br><br><br><br><br><br><br>
  Name: <input type="text" name="Rname">
  <br><br>
  Password: <input type="password" name="Rpass" >
  <br><br>
  <input type="submit" name="submit">  
</form>

<?php
session_start();

if(isset($_POST['submit'])) 
{

$_SESSION['users'] = array();
$User_name     = $_POST['name'];
$User_email    = $_POST['email'];
$User_password = $_POST['pass'];
$User_submit   = $_POST['submit'];

$name     = $_POST['Rname'];
$password = $_POST['Rpass'];

$users = array ($User_name ,  $User_email   , $User_password , $User_submit );


//echo "Register Successfully  ";


if(($name === $User_name ) && ($User_password === $password)){
  echo "Now you are logged in";
}else{
  echo "Not allowed";
}


}

?>




</body>
</html>