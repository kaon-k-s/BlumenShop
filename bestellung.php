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
		$blumenAbschicken = $_SESSION["blumenabschicken"];
		if ($sessionOn && $blumenAbschicken) {
			$rose = $_SESSION["Rose"] = $_POST["Rose"];
			$tulpe = $_SESSION["Tulpe"] = $_POST["Tulpe"];
			$orchidee = $_SESSION["Orchidee"] = $_POST["Orchidee"];
			$server = "localhost";
			$user = "php-user";
			$pass = "DS5JiWHLqrYsPsJS";
			$database = "blumenshop";
			
			$verbindung = mysqli_connect($server, $user, $pass, $database)
					  or die("Verbindung konnte nicht hergestellt werden.");

			$usercurrent = $_SESSION["Mailadresse"];
			$sql = "INSERT INTO blumenbestellung (rose, tulpe, orchidee, usercurrent)";
			$sql .= " VALUES ('$rose', '$tulpe', '$orchidee', '$usercurrent')";
			$abfrage = mysqli_query($verbindung, $sql);
			if ($abfrage) {
				echo "<p>Ihre Auswahl wurde gespeichert. <a href=\"abschluss.php\">Zur Bestellungsübersicht</a></p>";
			} else {
				echo "<p>Die SQL-Anweisung ist fehlgeschlagen.</p>" . mysqli_error($verbindung);
			}
			//$return = mysqli_close($verbindung);
		}
		
		?>
		<form action="<?php echo $_SERVER["SCRIPT_NAME"]?>" method="post">
			<input type="submit" name="ausloggen" value="Ausloggen"/>
		</form>
		
	</body>
</html>