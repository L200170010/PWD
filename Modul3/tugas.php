<html>
<head>
	<title>Program Penjumlahan</title>
</head>
<body>
	<form method="POST" action="tugas.php" name="formnya">
		<p>Nilai A adalah : <input type="input" name="nilai_A" ></p>
		<p>Nilai B adalah : <input type="input" name="nilai_B" ></p>
		<p><input type="submit" name="tombol" value="submit" ></p>
	</form><br><br>
	<?php
		error_reporting (E_ALL ^ E_NOTICE);
		$nilaiA = $_POST["nilai_A"];
		$nilaiB = $_POST["nilai_B"];
		$submit = $_POST["tombol"];
		$hasil = $nilaiA + $nilaiB;

		if ($hasil % 2 == 0){
			echo "Nilai adalah bilangan genap, karena :<br>";
		}else{
			echo "Nilai adalah bilangan ganjil, karena :<br>";
		}

		if ($submit) {
			echo "Nilai A adalah $nilaiA<br>";
			echo "Nilai B adalah $nilaiB<br>";
			echo "Jadi Nilai A ditambah Nilai B adalah $hasil";
		}
		
		
	?>
</body>
</html>