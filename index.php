<!DOCTYPE html>
<html>
	<head>
		<title>Exemple</title>
	</head>
	<body>
	<?php
		$nom = 'Tong';
		$prenom = 'Tin';
		$age = '33 ans';
		
		echo "Bondour de m'appelle " . $prenom . " " . $nom . " " . $age . " de vie en France depuis pas très très longtemps.";
		echo "<br/>";

		$ville1 = 'Pyonghiang';
		$ville2 = 'Paris';

		echo "Je viens de " . $ville1 . " ." . " Maintenant j'habite à ". $ville2 . ".";

		echo "<br/>";

		if ($age >= 18) {
			echo "Majeur";
		} elseif ($age >= 15) {
			echo "Ado";
		} else {
			echo "Enfant";
		}
		echo "<br/>";
	?>
	</body>
</html>