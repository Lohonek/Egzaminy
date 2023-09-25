<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal ogloszeniowy</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="banner">
    <h1>Portal Ogłoszeniowy</h1>
  </div>
  <main>
    <div class="left">
      <h2>Kategorie ogłoszeń</h2>
      <ol>
        <li>Książki</li>
        <li>Muzyka</li>
        <li>Filmy</li>
      </ol>
      <img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">
      <table>
        <thead>
          <tr>
            <th>Liczba Ogłoszeń`</th>
            <th>Cena ogloszenia</th>
            <th>Bonus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1-10</td>
            <td>1 PLN</td>
            <td rowspan="3">Subskrybcja newslettera to upust 0,20 PLN na ogloszenie</td>
          </tr>
          <tr>
            <td>11-55</td>
            <td>0,80 PLN</td>
          </tr>
          <tr>
            <td>51 i więcej</td>
            <td>0,60 PLN</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="right">
      <h2>Ogłoszenia kategorii książki</h2>

      <?php
      $con = mysqli_connect('localhost', 'root', '', 'ogloszenia');
      $ask = "SELECT id, tytul, tresc from ogloszenie WHERE kategoria = 1";
      $ask1 = "SELECT telefon FROM uzytkownik inner JOIN ogloszenie On uzytkownik.id = ogloszenie.uzytkownik_id ";
      $wynik = mysqli_query($con, $ask);
      $wynik1 = mysqli_query($con, $ask1);

      while ($wiersz = mysqli_fetch_row($wynik)) {
        $wiersz1 = mysqli_fetch_row($wynik1);
        echo "<h3>" . $wiersz[0] . " " . $wiersz[1] . "</h3>";
        echo "<p>" . $wiersz[2] . "</p>";
        echo "<p>" . "Telefon kontaktowy: " . $wiersz1[0];
      }
      mysqli_close($con);
      ?>
    </div>
  </main>
  <div class="footer">
    Portal ogłoszeniowy opracował: nyku
  </div>
</body>

</html>
<!-- 
1. SELECT id, tytul, tresc from ogloszenie WHERE kategoria = 1
2. SELECT telefon FROM uzytkownik inner JOIN ogloszenie On uzytkownik.id = ogloszenie.uzytkownik_id WHERE ogloszenie.id = 1 -->