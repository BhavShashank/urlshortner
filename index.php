<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>URL Short</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<h1 class="title">
			Shorten A URL
		</h1>
		<?php
			if (isset($_SESSION['feedback'])) {
				echo "<p>{$_SESSION['feedback']}</p>";
				unset($_SESSION['feedback']);
			}
		?>
		<form action="shorten.php" method="post">
			<input type="url" name="url" placeholder="Please paste URL here" autocomplete="off">
			<input type="submit" value="Shorten">
		</form>
	</div>
</body>
</html>