<?php
if ($_COOKIE["user"] === "empty")
	include("header_out.php");
else
	include("header_in.php");
?>

<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>
	<div class="home-container">
		<div class="photo">
			<img id="pic" src="betamonkeys.jpeg" alt="betamonkeys">
		</div>
	</div>
</body>
</html>

<?php
include("footer.php");
?>
