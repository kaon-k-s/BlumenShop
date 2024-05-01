<?php
session_start();	
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SQL-Abfrage</title>
  </head>
  <body>
    <h1>Anmelden</h1>
    <?php
    $server = "localhost";
    $user = "php-user";
    $pass = "DS5JiWHLqrYsPsJS";
    $database = "blumenshop";
    $benutzername = $_SESSION["Benutzername"] = trim($_POST["Benutzername"]);
    $mail = $_SESSION["Mailadresse"] = trim($_POST["Mailadresse"]);
	$passwort = $_SESSION["Passwort"] = $_POST["Passwort"];
	
	error_reporting(E_ERROR | E_PARSE);
	
	if (empty($benutzername) || empty($mail) || empty($passwort)) {
		echo "<p>Bitte füllen Sie alle Felder aus</p>";
		echo "<p><a href=\"index.php\">Zurück zum Formular</a></p>";
	} else {
		$verbindung = mysqli_connect($server, $user, $pass, $database)
		or die("Verbindung konnte nicht hergestellt werden.");
		$sql = "SELECT * FROM `benutzeraccount` WHERE `Benutzername` = '" . $benutzername . "' AND `Mailadresse` = '" . $mail . "' AND `Passwort` = '" . $passwort . "'";
		$abfrage = mysqli_query($verbindung, $sql);
		$sessionOn = false;
		if (mysqli_num_rows($abfrage) > 0) {
			$sessionOn = $_SESSION["sessionOn"] = true;
			echo "<p>Sie sind angemeldet!</p>";
			echo "<a href=\"blumen.php\">Zum Blumenauswahl</a>";
		}
		if (!$sessionOn) {
			$sessionOn = $_SESSION["sessionOn"] = false;
			$return = mysqli_close($verbindung);
			$destroy = session_destroy(); 
			
			if ($return AND $destroy) { 
				echo "<p>Die Verbindung mit dem Server wurde beendet.</p>"; 
			} else { 
				echo "<p>Die Verbindung mit dem Server konnte nicht geschlossen werden.</p>"; 
			} 
			echo "<p>Bitte anmelden Sie sich: <a href=\"index.php\">Zurück zum Formular</a> </p>";
		}
			
	}
    ?>
  </body>
</html>