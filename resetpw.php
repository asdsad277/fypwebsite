<?php require'base/header.php';?>
<div class="container">
<?php
require("Modle/conn.php");
date_default_timezone_set('Asia/Hong_Kong');
if (isset($_GET["key"]) && isset($_GET["email"])){
	$key = $_GET["key"];
	$email = $_GET["email"];
	$curDate = date("Y-m-d H:i:s");
	$sql="SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';";
	$rs = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	if(mysqli_num_rows($rs)==0){?>
		<h2>Invalid Link</h2><p>
		The link is invalid/expired. Either you did not copy the correct link
		from the email, or you have already used the key in which case it is 
		deactivated.
		<p><a href="http://seantalk.asuscomm.com/resetpw.php">
		Click here</a> to reset password.
	<?php
	}else{
		 $row = mysqli_fetch_assoc($query);
		 $expDate = $row['expdate'];
		 if ($expDate >= $curDate){?>
			<form method="post" action="" name="update">
				<input type="hidden" name="action" value="update" />
				<br /><br />
				<label><strong>Enter New Password:</strong></label><br />
				<input type="password" name="pass1" maxlength="15" required />
				<br /><br />
				<label><strong>Re-Enter New Password:</strong></label><br />
				<input type="password" name="pass2" maxlength="15" required />
				<br /><br />
				<input type="hidden" name="email" value="<?php echo $email;?>"/>
				<input type="submit" value="Reset Password" />
			</form>
	<?php
		}else{?>
			<h2>Link Expired</h2>
			<p>The link is expired. You are trying to use the expired link which 
				as valid only 24 hours (1 days after request).<br /><br />
	<?php
		}
	}
}
	?>
</div>
<?php require'base/footer.php';?>

<?php
if(isset($_POST['email'])&&isset($_POST['pass1'])){
	$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
	$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
	$email = $_POST["email"];
	$curDate = date("Y-m-d H:i:s");
	if ($pass1!=$pass2){?>
	<p>Password do not match, both password should be same.<br /><br />
	<?php
	}else{
		$sql="UPDATE `account SET `password`='".$pass1."' WHERE `email`='".$email."';";
		mysqli_query($conn,$sql);
		$sql1="DELETE FROM `forgetpw` WHERE `email`='".$email."';";
		mysqli_query($conn,$sql1);?>
		<h1>Congratulations!</h1><p>
		Your password has been updated successfully.<p>
		<a href="http://seantalk.asuscomm.com/">Click here</a> 
		to Login.
		<?php
	}
}
?>
