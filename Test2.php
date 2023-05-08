<?php
session_start();
if(isset($_POST['save'])){
    //store the session data
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['phone_no'] = $_POST['phone_no'];
    //print_r($_SESSION);
}
//reset the form data
if(isset($_POST['reset'])){
	session_unset();
	//session_destroy();
}
?>

<html>
<head>
<title>How to Store values in session in php</title>
<link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
<style>
.container{
	width:50%;
	height:30%;
	padding:20px;
}
</style>

</head>
<body>
   <div class="container">
   	 <form class="form-horizontal" action="" method="post">
   	 	  <div class="form-group">
		    <label class="control-label col-sm-2" for="email">Name:</label>
		    <div class="col-sm-10">
		      <input type="text" value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username'];?>" class="form-control" name="username" placeholder="Enter Name">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="email">Email:</label>
		    <div class="col-sm-10">
		      <input type="email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>" class="form-control" name="email" placeholder="Enter email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="email">Phone No:</label>
		    <div class="col-sm-10">
		      <input type="number" value="<?php if(isset($_SESSION['phone_no'])) echo $_SESSION['phone_no'];?>" class="form-control" name="phone_no" placeholder="Enter Phone No">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" name="save" class="btn btn-success">Submit</button>
		      <button type="submit" name="reset" class="btn btn-danger">Reset</button>
		    </div>
		  </div>
	</form>
   </div>
<br/><br/>
<!--End edit Model-->
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>