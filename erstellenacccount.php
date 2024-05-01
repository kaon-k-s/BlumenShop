<?php
session_start();	
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Blumen Shop - Erstellen Account</title>
  </head>
  <body>
    <h1>Erstellen Account</h1>
    <?php
    $server = "localhost";
    $user = "php-user";
    $pass = "DS5JiWHLqrYsPsJS";
    $database = "blumenshop";
    $benutzername = $_SESSION["Benutzername"] = trim($_POST["Benutzername"]);
    $mail = $_SESSION["Mailadresse"] = trim($_POST["Mailadresse"]);
	$passwort = $_SESSION["Passwort"] = $_POST["Passwort"];
	
	
	if (empty($benutzername) || empty($mail) || empty($passwort)) {
		echo "<p>Bitte füllen Sie alle Felder aus</p>";
		echo "<p><a href=\"index.php\">Zurück zum Formular</a></p>";
	} else {
		$verbindung = mysqli_connect($server, $user, $pass, $database)
		or die("Verbindung konnte nicht hergestellt werden.");
		$sql = "INSERT INTO benutzeraccount (Benutzername, Mailadresse, Passwort)";
		$sql .= " VALUES ('$benutzername', '$mail', '$passwort')";
		$abfrage = mysqli_query($verbindung, $sql);
		
		if ($abfrage) {
			echo "<p>Vielen Dank für die Registrierung! Sie können sich jetzt <strong><a href=\"index.php\">anmelden</a></strong> und mit dem Einkauf fortfahren.</p>";
		  } else {
			echo "<p>Die SQL-Anweisung ist fehlgeschlagen.</p>" . mysqli_error($verbindung);
		  }
		  $return = mysqli_close($verbindung);
		  if (!$return) {
			echo "<p>Die Verbindung mit dem Server konnte nicht geschlossen werden.</p>";
		}			
	}
    ?>
  </body>
</html>