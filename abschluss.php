<?php
session_start();
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blumen Shop - Bestellungsübersicht</title>
	</head>
	<body>
		<h1>Bestellungsübersicht</h1>
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
			$rose = $_SESSION["Rose"];
			$tulpe = $_SESSION["Tulpe"];
			$orchidee = $_SESSION["Orchidee"];
			echo "<p>";
			if ($rose > 0) {
			  echo "Rose: $rose<br>";
			}
			if ($tulpe > 0) {
			  echo "Tulpe: $tulpe<br>";
			}
			if ($orchidee > 0) {
			  echo "Orchidee: $orchidee<br>";
			}
			echo "</p>";
			
			echo "<p>Mehr hinzufügen<input type=\"submit\" name=\"mehr\" value=\"Mehr\"></p>";
			if (isset($_POST["mehr"])) {
				
			}
			
		} else {
			$sessionOn = $_SESSION["sessionOn"] = false;
			echo "<p>Bitte anmelden Sie sich: <a href=\"index.php\">Zum Formular</a></p>";
		}
		
		?>
		<form action="<?php echo $_SERVER["SCRIPT_NAME"]?>" method="post">
			<input type="submit" name="ausloggen" value="Ausloggen"/>
		</form>
		
	</body>
</html>