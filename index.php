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
			echo "Majeur et vacciné.";
		} elseif ($age >= 15) {
			echo "Ado en crise";
		} else {
			echo "Enfant à claquer dans le mur";
		}
		echo "<br/>";

		$age2 = 33;

		echo $age <=> $age2;
		echo "<br/>";
		echo 1 <=> 2;
		echo "<br/>";
		echo 2 <=> 1;

		echo "<br/>";
		echo "<br/>";

		// Déclaration de variables 
		$a = null;
		$c = 5;
		$b = 2;
		$d;

		echo '$a ?? $b ?? $c ?? $d;';
		echo "<br/>";
		echo $a ?? $b ?? $c ?? $d;  // la première valeur non nul est la 2
		echo "<br/>";

		// L'arithmétique :
		$a = 5;
		$b = $a + 5;
		echo "b vaut $b et ";
		echo "a vaut $a";
		echo "<br/>";

		
		$b = $a += 5;
		echo "b vaut $b et ";
		echo " a vaut $a";
		echo "<br/>";

		$a++; // $a = $a + 1
		echo "a vaut $a <br>";

		++$a; // $a = $a + 1
		echo "a vaut $a <br>";


		// différence : 
		echo "avant a vaut ". ++$a;
		echo " après a vaut ". $a;

		echo "<br/>";

		echo "avant a vaut ". $a++;
		echo " après a vaut ". $a;

		echo "<pre>";
		print_r ($a);
		echo "</pre>";

		echo "<pre>";
		var_dump($a);
		echo "ce code n'est pas interprété\n\n du tout";
		echo "</pre>";

		$array = ["couleur" => "rouge", "taille" => 1.70];
		echo "<pre>";
		var_dump($array);
		echo "</pre>";

		die("This is the end - Adele");




		
			?>
	</body>
</html>