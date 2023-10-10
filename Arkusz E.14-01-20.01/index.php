<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nasz sklep komputerowy</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div class="menu">
      <a href="index.php">Główna</a>
      <a href="procesory.html">Procesory</a>
      <a href="ram.html">RAM</a>
      <a href="grafika.html">Grafika</a>
    </div>
    <div class="logo">
      <h2>Podzespoły komputerowe</h2>
    </div>
  </header>
  <main>
    <h1>Dzisiejsze promocje</h1>
    <table>
      <tr>
        <td class="head">NUMBER</td>
        <td class="head">NAZWA PODZESPOŁU</td>
        <td class="head">OPIS</td>
        <td class="head">CENA</td>
      </tr>
      <?php
      $connect = mysqli_connect("localhost", "root", "", "komputer");
      if (!$connect) {
        echo "Błąd połączenia.";
        exit;
      }

      $zapytanie = mysqli_query($connect, "SELECT id,nazwa,opis,cena FROM podzespoly WHERE cena < 1000");

      while ($wiersz = mysqli_fetch_assoc($zapytanie)) {
        echo "<tr>";
        echo "<td>" . $wiersz['id'] . "</td>";
        echo "<td>" . $wiersz['nazwa'] . "</td>";
        echo "<td>" . $wiersz['opis'] . "</td>";
        echo "<td class='align' id='right' >" . $wiersz['cena'] . "</td>";
        echo "</tr>";
      }

      mysqli_close($connect);
      ?>
    </table>
  </main>
  <footer>
    <div class="blok1 blok">
      <img src="scalak.jpg" alt="promocje na procesory">
    </div>
    <div class="blok2 blok">
      <h4>Nasz Sklep Komputerowy</h4>
      <p>Współpracujemy z hurtownią <a href="http://edata.pl" target="_blank">edata</a></p>
    </div>
    <div class="blok3 blok">
      zadzwoń 601 602 603
    </div>
    <div class="blok4 blok">
      <p>Stronę wykonał: nyku</p>
    </div>
  </footer>
</body>

</html>