<?php
session_start();
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blumen Shop - Shop!</title>
	</head>
	<body>
		<h1>Blumen Shop</h1>
		<?php
		if (isset($_POST["ausloggen"])) {
			$sessionOn = $_SESSION["sessionOn"] = false;
			session_destroy();
		}
		?>
		<?php
		if ($_SESSION["sessionOn"]) {
			$sessionOn = $_SESSION["sessionOn"];
		} else {
			$sessionOn = false;
		}
		if ($sessionOn) {
			echo "<h2>Unsere Blumen</h2>";
			echo "<form action=\"bestellung.php\" method=\"POST\">";
				echo "<table style=\"background-color:pink\">";
					echo "<tr><th>Blumen</th><th>Menge</th></tr>";
					echo "<tr><td>Rose</td><td><input type=\"text\" name=\"Rose\"></td></tr>";
					echo "<tr><td>Tulpe</td><td><input type=\"text\" name=\"Tulpe\"></td></tr>";
					echo "<tr><td>Orchidee</td><td><input type=\"text\" name=\"Orchidee\"></td></tr>";
					echo "<tr><td colspan=\"2\"><input type=\"submit\" name=\"abschicken\" value=\"Abschicken\"></td></tr>";
				echo "</table>";
			echo "</form>";
			
		} else {
			$sessionOn = $_SESSION["sessionOn"] = false;
			echo "<p>Bitte anmelden Sie sich: <a href=\"index.php\">Zum Formular</a></p>";
		}
		$blumenAbschicken = $_SESSION["blumenabschicken"] = true;
		if ($sessionOn && isset($_POST["abschicken"])) {
			$blumenAbschicken = $_SESSION["blumenabschicken"] = true;
		}
		
		?>
		<form action="<?php echo $_SERVER["SCRIPT_NAME"]?>" method="post">
			<input type="submit" name="ausloggen" value="Ausloggen"/>
		</form>
		
	</body>
</html>