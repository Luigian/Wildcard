<?php

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="header_in.css">
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
				<?php
					if (isset($_COOKIE["gymClimbId"]))
						echo '<a id="add" href="add.php">ADD</a>';
					else	
						echo '<a id="add" href="gyms.php">ADD</a>';
				?>
				<a id="history" href="history.php">HISTORY</a>
				<a id="analytics" href="analytics.php">ANALYTICS</a>
			</div>
			<div class="in-dropdown">
				<img class="dropbtn" src="cashew_icon_black.png">
				<div class="dropdown-content">
					<?php
						if (isset($_COOKIE["gymAdmId"]))
							echo '<a class="inmenu" id="gymadmin" href="routes.php">GYM ADMIN</a>';
						else	
							echo '<a class="inmenu" id="gymadmin" href="gym_signup.php">GYM ADMIN</a>';
					?>
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
		{
			document.cookie = 'logout=true';
			// // document.cookie = "userId=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "userName=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "gymAdmId=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "gymAdmName=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "gymClimbId=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "gymClimbName=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "displayAllRoutes=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "removeClimb=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "removeRoute=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "activateRoute=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "inactivateRoute=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "logoutCancel=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "actualPage=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			// document.cookie = "token=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
		}
		else
			document.cookie = 'logout=cancel';
	}

	function funCookie()
	{
		alert(document.cookie);
	}
</script>
