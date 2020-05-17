<?php
session_start();
    include '../Modle/DB.php';
	error_reporting(E_ALL ^ E_WARNING); 
	
	$db = new DB();		
	$db->editRow("ticket","Statis","P","ShopID",$_GET['SID']."' and sequence = '1");	
	//echo $db->seachWhere_getRow("ticket","Statis","W");
	//echo $db->seachWhere_getRow("ticket","ShopID",$_GET['SID']."' AND statis = 'P");
	
	if ($db->seachWhere_getRow("ticket","ShopID",$_GET['SID']."' AND statis = 'P")>0){
		$ticketInfo = $db->seachWhere("ticket","ShopID",$_GET['SID']."' and sequence = '1");
		$Customerinfo = $db->seachWhere("Customer","CustomerID",$ticketInfo[CustomerID]);
		$accountinfo = $db->seachWhere("Account","AccountID",$Customerinfo[AccountID]);
		echo $accountinfo[Email];
		
		
		$to_email = $accountinfo[Email];
		//$to_email ="seanonline12@gmail.com";
		$subject = "Simple Email Test via PHP";
		$body = "Hi,".$accountinfo[Username]." Your ticket is ready";
		$headers = "From: Let's eat\'s email";
		 
		if (mail($to_email, $subject, $body, $headers)) {
			echo "Email successfully sent to $to_email...";
		} else {
			echo "Email sending failed...";
		}
	}
	
	header("Location: ../managePage.php?SID=".$_GET['SID']);
	
?>
