<?php
    include '../Modle/DB.php';
		date_default_timezone_set("HongKong");
	//Controllers/getTicketMoblie.php?AccountID=cus1&SID=1&nos=5
		$db = new DB();		
			$TID = $db->getID('Ticket','TicketID');
			$sequence = $db->getID(("Ticket where ShopID = '".$_GET['SID']."'"),'sequence');
			$value = "'".$TID."','W', '".$_GET['SID']."', '".$db->seachWhere('Customer','AccountID',$_GET['AccountID'])['CustomerID']."', '".date("Y-m-d")."', '".date("H:i:s")."', '".$sequence."'";			
			$value2 = "'".$db->getID('ticketinforestaurant','TicketInfoRestaurantID')."','".$_GET['nos']."', '".$TID."'";
			echo $value;
			echo $value2;
			$db->addRow('Ticket',$value);
			$db->addRow('ticketinforestaurant',$value2);		
	//header("Location: ../restaurantInfo.php?SID=".$_POST['SID']);
	
?>
