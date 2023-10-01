<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sklep papierniczy</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="banner">
    <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
  </div>
  <main>
    <div class="left">
      <h3>Promocja 15% obejmuje artykuły:</h3>
      <ul>


        <?php

        $conn = mysqli_connect("localhost", "root", "", "sklep2");
        $sql = "SELECT `towary`.`nazwa` FROM `towary` WHERE `towary`.`promocja` = 1";
        $res = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_row($res)) {
          echo "<li>" . $row[0] . "</li>";
        }

        ?>
      </ul>
    </div>
    <div class="mid">
      <h3>Cena wybranego artykułu w promocji</h3>
      <form method="post">
        <select name="produkt" id="">
          <?php

          $res2 = mysqli_query($conn, $sql);
          while ($row2 = mysqli_fetch_row($res2)) {
            echo "<option value='$row2[0]'>" . $row2[0] . "</option>";
          }

          ?>
        </select>

        <input type="submit" value="WYBIERZ">
      </form>
      <?php

      if (!isset($_POST['produkt'])) {
        $produkt = "Gumka do mazania";
      } else {
        $produkt = $_POST['produkt'];
      }


      $sql3 = "SELECT `towary`.`cena` FROM `towary` WHERE `towary`.`nazwa` = '$produkt'";
      $res3 = mysqli_query($conn, $sql3);

      $cena = mysqli_fetch_row($res3);

      $cena[0] = round(($cena[0] * .85), 2);

      echo $cena[0] . "zł";

      ?>
    </div>
    <div class="right">
      <h3>Kontakt</h3>
      <p>telefon: 123123123</p>
      <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a> </p>
      <img src="img.png" alt="">
    </div>
  </main>
  <div class="footer">
    <h4>Autor strony: nyku</h4>
  </div>
</body>

</html>