<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bibilioteka publiczna</title>
  <link rel="stylesheet" href="styl.css">
</head>

<body>

  <header>
    <h2>Miejska Bibliotka Publiczna w Książkowicach</h2>
  </header>
  <main>
    <div class="left">
      <h2>Dodaj czytelnika</h2>
      <form action="" method="post">
        imię: <input type="text" name="imie"><br>
        nazwisko: <input type="text" name="nazwisko"> <br>
        rok urodzenia: <input type="number" name="rok"><br>
        <input type="submit" value="DODAJ">
      </form>
      <?php
      $con = mysqli_connect('localhost', 'root', '', 'biblioteka');
      $imie = $_POST['imie'];
      $nazwisko = $_POST['nazwisko'];
      $rok = $_POST['rok'];
      $dodaj = mysqli_query($con, "INSERT INTO czytelnicy (imie, nazwisko) VALUES ('$imie','$nazwisko')");
      echo "czytelnik" . ' ' . $nazwisko . ' ' . "został dodany do bazy danych";
      mysqli_close($con)
      ?>
    </div>
    <div class="mid">
      <div class="mleft">
        <img src="biblioteka.png" alt="biblioteka">
      </div>
      <div class="mright">
        <h4>
          <p>ul. Czytelnicza 25
          <p>12-120 Książkowice</p>
          </p>
          <p> tel.: 123123123 </p>
          <p>e-mail: biuro@bib.pl</p>
        </h4>
      </div>
    </div>
    <div class="right">
      <h3>Nasi czytelnicy</h3>
      <ul>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'biblioteka');
        $lista = mysqli_query($con, 'select imie,nazwisko from czytelnicy');
        while ($data = mysqli_fetch_assoc($lista)) {
          echo '<li>' . $data['imie'] . ' ' . $data['nazwisko'] . ' ' . '</li>';
        };
        mysqli_close($con);
        ?>
      </ul>
    </div>
  </main>
  <footer>
    <p>Projekt witryny: nyku</p>
  </footer>
</body>

</html>