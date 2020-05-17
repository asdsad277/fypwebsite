<?php
    include '../Modle/DB.php';
		date_default_timezone_set("HongKong");
	//Controllers/getTicketMoblie.php?AccountID=cus1&SID=1&nos=5
		$db = new DB();		
			$TID = $db->getID('Ticket','TicketID');
			$sequence = $db->getID(("Ticket where ShopID = '".$_GET['SID']."'"),'sequence');
			$value = "'".$TID."','W', '".$_GET['SID']."', '".$db->seachWhere('Customer','AccountID',$_GET['AccountID'])['CustomerID']."', '".date("Y-m-d")."', '".date("H:i:s")."', '".$sequence."'";			
			$value2 = "'".$db->getID('ticketinforestaurant','TicketInfoRestaurantID')."','".$_GET['nos']."', '".$TID."'";
			$db->addRow('Ticket',$value);
			$db->addRow('ticketinforestaurant',$value2);		
	header("Location:refresh:10;url=../index.php");
			
?>
<h1>Your ticket has been generated back to the app and see the result!</h1><p>
this page will redirect to <a href="http://seantalk.asuscomm.com">home page</a> in 10 seconds!~