<?php
	session_start();
	include_once 'includes/dbh.inc.php';
	


		$smoke = $_POST['smoke'];
		$speed = $_POST['speed'];
		$fire = $_POST['fire'];
		$temperature = $_POST['temperature'];
		$count = $_POST['count'];
		$other = $_POST['other'];
		
		$sql_store = "INSERT into sensor_data (smoke, speed, fire, temperature, count, other) VALUES ('$smoke', '$speed', '$fire', '$temperature', '$count', '$other')";
		$sql = mysqli_query($conn, $sql_store) or die(mysql_error());


?>

<!DOCTYPE html>

<HTML>
<head>
	<title>test1</title>
</head>

<body>

<h1> (test) Send Integer values to database:</h1>
<form action="test1.php" method "POST">
	<input type="number" name = "smoke" value="" placeholder= "smoke">
	<input type="number" name = "speed" value="" placeholder= "speed">
	<input type="number" name = "fire" value="" placeholder= "fire">
	<input type="number" name = "temperature" value="" placeholder= "temperature">
	<input type="number" name = "count" value="" placeholder= "count">
	<input type="number" name = "other" value="" placeholder= "other">
	<input type="submit" name = "submit" value="submit">
</form>

<p> Smoke values </p>

<?php
	$sql = "SELECT * FROM sensor_data;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
	echo $row ['smoke'] . "<br>";
	}

	}
?>


<p> Speed values </p>

<?php
	$sql = "SELECT * FROM sensor_data;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
	echo $row ['speed'] . "<br>";
	}

	}
?>


<p> Fire values </p>

<?php
	$sql = "SELECT * FROM sensor_data;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
	echo $row ['fire'] . "<br>";
	}

	}
?>



<p> temperature  values </p>

<?php
	$sql = "SELECT * FROM sensor_data;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
	echo $row ['temperature'] . "<br>";
	}

	}
?>


<p> Count values </p>

<?php
	$sql = "SELECT * FROM sensor_data;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
	echo $row ['count'] . "<br>";
	}

	}
?>


<p> Other values </p>

<?php
	$sql = "SELECT * FROM sensor_data;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
	echo $row ['other'] . "<br>";
	}

	}
?>





</body>
</html>