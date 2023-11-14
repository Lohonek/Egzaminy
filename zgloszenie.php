<?php
    $con = mysqli_connect('localhost', 'root', '', 'ratownictwo');
	$zespol = $_POST['zespol'];
	$dyspozytor = $_POST['dyspozytor'];
	$adres = $_POST['adres'];
	$kw = "INSERT INTO zgloszenia VALUES (NULL, $zespol, $dyspozytor, '$adres', 0, NOW());";
	mysqli_query($con, $kw);
    mysqli_close($con)
?>