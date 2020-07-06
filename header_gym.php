<?php
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="header_gym.css">
</head>

<body>
	<!-- Print Cookies -->
	<a id="cookie" onclick="funCookie()">O</a>
	<div class="header-container">
		<div class="logo">
			<a href="home.php">
				<img id="header_logo" src="logo_1.png" alt="Panic.bear">
			</a>
		</div>
		<div class="navi">
			<div id="outmenu">
				<a id="new" href="new.php">NEW</a>
				<a id="routes" href="routes.php">ROUTES</a>
				<a id="dashboard" href="dashboard.php">DASHBOARD</a>
			</div>
			<div class="in-dropdown">
				<img class="dropbtn" src="cashew_icon_black.png">
				<div class="dropdown-content">
					<a class="inmenu" id="climber" href="history.php">MY CLIMBS</a>
					<a class="inmenu" id="logoutbutt" href="home.php" onclick="logoutFunction()">LOGOUT</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script>
	function logoutFunction()
	{
		var logout_confirm = confirm('Do you want to logout?');
		if (logout_confirm == true)
			document.cookie = 'logout=true';
		else
			document.cookie = 'logout=cancel';
	}

	function funCookie()
	{
		alert(document.cookie);
	}
</script>
