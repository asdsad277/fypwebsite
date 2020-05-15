<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['msg'])){
    echo "<script type='text/javascript'>alert('".$_SESSION['msg']."');</script>";
    unset($_SESSION['msg']);
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>FYP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ff200ff162.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--css-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
    <!--jquery-->
    <script type="text/javascript" src="jslib/jquery-1.11.1.js"></script>
	
</head>
<body>
<?php require'Modal.php';?>
<div class="viewport"><!-- div to be closed in footer -->
    <div class="header">
        <div><!-- main menu -->
            <table class="header_menu">
                <tr>
					<td><a class="dropdown-item" href="index.php">Home</a></td>
                    <td>
					<ul class="navbar-nav">
						<!-- Dropdown -->
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Shop
					  </a>
					  <div class="dropdown-menu">
						<a class="dropdown-item" href="browseRestaurant.php">Restaurant</a>
					  </div>
					</li>
					</ul>
					</td>
					
					
					
					
					<!-------------------------------------------------------->
					 <!--Customer-->
	  <?php 
	  
	  if (isset($_SESSION['Permission'])){
		  
		  if ($_SESSION['Permission']=='C'){
			  ?>
			  <td>
				<a class="dropdown-item" href="favorite.php">Favorite</a>
			  </td>
			  <td>
				<a class="dropdown-item" href="MyTicketHistory.php">MyTicketHistory</a>
			  </td>
			  <?php
		  }
		  
		  
		  
		  if ($_SESSION['Permission']=='O'){
			  ?>
			  <!--operator-->
			  <td>
				<a class="dropdown-item" href="manageOperatorGroup.php">Operator Group</a>
			 </td>
			  <td>
			   <ul class="navbar-nav">
			  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Manage Shop
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="manageShop.php">Restaurant</a>      
      </div>
    </li>
	</ul>
	</td>
				
			 
			  
			  <?php
		  }
	  }
		  ?>
		  
		  
					<!-------------------------------------------------------->
					<td>
					<a class="dropdown-item" href="AI_Chat.php">AI Chat</a>
					</td>
					
					
                   
                </tr>
            </table>
        </div>
		
        <div class="right"><!-- user login/profile button aligned to the right -->
            <table class="header_menu">
                <tr>
					<?php
					  if (isset($_SESSION['Permission'])){
					?>
					<td>	
						<ul class="navbar-nav">
						<!-- Dropdown -->
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Hi <?=$_SESSION['Username']?>
					  </a>
					  <div class="dropdown-menu">
						 <a class="dropdown-item" href="Pofile.php">Pofile <img class="icon" src="img/icon/8.jpg"></a>
							  
					   
					  </div>
					</li>
					</ul>
						</td>
						<td>
						<a class="dropdown-item" href="Controllers/logout.php"> Logout <img class="icon" src="img/icon/7.jpg"></a>
						</td>
				  <?php
				  }else{
				  ?>
				  <td><a href="#" data-toggle="modal" data-target="#myModal">Login</a></td>
				<td><a href="Register.php">Register</a></td>
				 
				  <?php
				  }
				  ?>
                    
                    
                </tr>
            </table>
        </div>
    </div>
    <div class="main"><!-- div to be closed in footer -->
        <div class="content"><!-- div to be closed in footer -->