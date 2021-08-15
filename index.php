<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: prj0.html');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: prj0.html");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="welcomepage.css">
      <link rel="icon" type="image/png" href="Images/travelIcon2.png">
</head>
<body>
	<div class="header">
		<h2 style="color:white;">Welcome</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p style="text-align:center;">Namaste <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" ><button style="color: white; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); background-color: #555;  padding: 15px 32px;border-radius:20px; font-size: 20px;opacity: 0.8; transition-duration: 0.4s; margin-left:80px;margin-top:20px;">Click here to explore</button></a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>