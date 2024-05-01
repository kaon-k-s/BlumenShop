<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blumen Shop - Anmelden</title>
	</head>
	<body>
		<h1>Jetzt anmelden</h1>
		<?php
		if ($_SESSION["sessionOn"]) {
			$sessionOn = $_SESSION["sessionOn"];
		} else {
			$sessionOn = false;
		}
		if ($sessionOn) {
			echo "<p>Sie sind schon angemeldet. ";
			echo "<a href=\"blumen.php\">Zum Blumenauswahl</a>";
		} else {
			echo "<p>Bitte anmelden Sie sich:</p>";
			echo "<form action=\"anmelden.php\" method=\"POST\">";
				echo "<label for=\"BenutzernameID\">Benutzername</label>";
				echo "<input type=\"text\" name=\"Benutzername\" placeholder=\"Benutzername\" id=\"BenutzernameID\">";
				echo "<br/>";
				echo "<label for=\"MailadresseID\">Mailadresse</label>";
				echo "<input type=\"text\" name=\"Mailadresse\" placeholder=\"Mailadresse\" id=\"MailadresseID\">";
				echo "<br/>";
				echo "<label for=\"PasswortID\">Passwort</label>";
				echo "<input type=\"password\" name=\"Passwort\" placeholder=\"Passwort\" id=\"PasswortID\">";		
				echo "<br/>";
				echo "<input type=\"submit\" name=\"absenden\" value=\"Absenden\">";
			echo "</form>";
			
			
			echo "<p>Kein Account? Jetzt eins erstellen!</p>";
			echo "<form action=\"erstellenacccount.php\" method=\"POST\">";
				echo "<label for=\"BenutzernameID\">Benutzername</label>";
				echo "<input type=\"text\" name=\"Benutzername\" placeholder=\"Benutzername\" id=\"BenutzernameID\">";
				echo "<br/>";
				echo "<label for=\"MailadresseID\">Mailadresse</label>";
				echo "<input type=\"text\" name=\"Mailadresse\" placeholder=\"Mailadresse\" id=\"MailadresseID\">";
				echo "<br/>";
				echo "<label for=\"PasswortID\">Passwort</label>";
				echo "<input type=\"password\" name=\"Passwort\" placeholder=\"Passwort\" id=\"PasswortID\">";		
				echo "<br/>";
				echo "<input type=\"submit\" name=\"erstellen\" value=\"Erstellen Account\">";
			echo "</form>";
		}
		?>
	</body>
</html>