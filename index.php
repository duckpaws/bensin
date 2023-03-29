<!DOCTYPE html>
<html>
<head>
	<title>Program Perhitungan Waktu Tempuh, Konsumsi Bensin, dan Harga Bensin</title>
</head>
<body>
	<h2>Formulir Perhitungan</h2>
	<form method="post" action="result.php">
		<label>Beban (kg): </label>
		<input type="number" name="beban" required><br>
		<label>Jarak Tempuh (km): </label>
		<input type="number" name="jarak" required><br>
		<label>Kecepatan Rata-Rata (km/jam): </label>
		<input type="number" name="kecepatan" required><br>

		<input type="submit" name="submit">
	</form>
</body>
</html>
