<?php
require("../Modle/conn.php");
if(isset($_POST['email'])&&isset($_POST['pass1'])){
	$pass1 = mysqli_real_escape_string($conn,$_POST["pass1"]);
	$pass2 = mysqli_real_escape_string($conn,$_POST["pass2"]);
	$email = $_POST["email"];
	$curDate = date("Y-m-d H:i:s");
	if ($pass1!=$pass2){?>
	<p>Password do not match, both password should be same.<br /><br />
	<?php
	}else{
		$sql="UPDATE `account` SET `password`='".$pass1."' WHERE `email`='".$email."';";
		mysqli_query($conn,$sql);
		$sql1="DELETE FROM `forgetpw` WHERE `email`='".$email."';";
		mysqli_query($conn,$sql1);?>
		<h1>Congratulations!</h1><p>
		Your password has been updated successfully.<p>
		<a href="http://seantalk.asuscomm.com/">Click here</a> 
		to Login.
		<?php
	}
}else{
	header("location:http://seantalk.asuscomm.com/");
}
?>