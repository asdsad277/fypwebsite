<?php
session_start();
    include '../Modle/DB.php';

	
		$db = new DB();
		
		if(isset($_SESSION['AccountID'])){
		$value = "'".$db->getID('Comment','CommentID')."','".$_POST['Comment']."','".$_SESSION['AccountID']."','".$_GET['SID']."','".date("Y-m-d")."', '".date("H:i:s")."'";
		echo $value;
		
		
			if(isset($_POST['Comment'])){
				if($db->addRow('Comment',$value)){
					$_SESSION['msg']="Sended";
				}else{
					$_SESSION['msg']="Fail to send Comment";
				}
			}else{
				$_SESSION['msg']="No any Comment here";
			}
		}else{
			$_SESSION['msg']="Please login first";
		}
	
	header("Location: ../restaurantInfo.php?SID=".$_GET['SID']);
	
?>
