<?php
$connect = mysqli_connect('localhost', 'root', '', 'ogloszenia');
$kat = $_POST['kat'];
$pkat = $_POST['podk'];
$title = $_POST['tyt'];
$tr = $_POST['tresc'];
$ask = "INSERT INTO `ogloszenie` (`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES
(NULL, 1, '$kat', '$pkat', '$title', '$tr')";
if (isset($kat) || isset($pkat) || isset($title) || isset($tr)) {
  mysqli_query($connect, $ask);
  echo "Dane zostały dodane";
}

mysqli_close($connect);
