<?php
	
	$izdelki = array(
		array(
			"izdelek" => "Sadje",
			"cena" => "2 eur",
			"kolicina" => "4"
		),
		array(
			"izdelek"=> "Zelenjava",
			"cena" => "3 eur",
			"kolicina"=> "2"
			),
		array(
			"izdelek"=> "Kruh",
			"cena" => "1 eur",
			"kolicina"=> "1"
			)
		);

	if (isset($_POST["izdelek"])) {
      $kljuc = $_POST["izdelek"];
  }

  if (isset($kljuc)) {
		echo $izdelki[$kljuc]["izdelek"]."<br>";
		echo $izdelki[$kljuc]["cena"]. "<br>";
		echo $izdelki[$kljuc]["kolicina"];
	}
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="naloga-narocilnica.php" method="post">
		<input type="radio" name="izdelek" value="0">Sadje
		<br>
		<input type="radio" name="izdelek" value="1">Zelenjava
		<br>
		<input type="radio" name="izdelek" value="2">Kruh
		<br>
		<button type="submit" class="btn btn-default">Oddaj</button>
	</form> 
</body>
</html>