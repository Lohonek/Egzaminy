<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="banner">
    <h1>GABINET WETERYNARYJNY</h1>
  </div>
  <main>
    <section class="left">
      <h2>PSY</h2>
      <?php

      $c  = mysqli_connect('localhost', 'root');
      $con = mysqli_select_db($c, 'zwierzeta');
      $kwe = "SELECT id ,imie, wlasciciel FROM zwierzeta WHERE rodzaj = '1'";
      $d = mysqli_query($c, $kwe);

      while ($wynik = mysqli_fetch_array($d)) {
        echo $wynik['id'] . ' ' . $wynik['imie'] . ' ' . $wynik['wlasciciel'] . '<br>';
      }

      mysqli_close($c);

      ?>

      <h2>KOTY</h2>
      <?php

      $c  = mysqli_connect('localhost', 'root');
      $con = mysqli_select_db($c, 'zwierzeta');
      $kwe = "SELECT id ,imie, wlasciciel FROM zwierzeta WHERE rodzaj = '2'";
      $d = mysqli_query($c, $kwe);

      while ($wynik = mysqli_fetch_array($d)) {
        echo $wynik['id'] . ' ' . $wynik['imie'] . ' ' . $wynik['wlasciciel'] . '<br>';
      }

      mysqli_close($c);

      ?>
    </section>
    <section class="mid">
      <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
      <?php

      $c  = mysqli_connect('localhost', 'root');
      $con = mysqli_select_db($c, 'zwierzeta');
      $kwe = "SELECT imie, telefon, szczepienie, opis FROM zwierzeta";
      $d = mysqli_query($c, $kwe);

      while ($wynik = mysqli_fetch_array($d)) {
        echo 'Pacjent: ' . $wynik['imie'] . '<br>' . 'Telefon wlasciciela: ' . $wynik['telefon'] . ', ostatnie szczepienie ' . $wynik['szczepienie'] . ', informacje ' . $wynik['opis'] . '<hr>' . '<br>';
      }

      mysqli_close($c);

      ?>
    </section>
    <section class="right">
      <h2>WETERYNARZ</h2>
      <div class="box">
        <div class="opis">
          <p>„Krzysztof Nowakowski, lekarz weterynarii”</p>
        </div>
        <div class="img">
          <img src="rys.png" alt="">
        </div>
      </div>
      <h2>GODZINY PRZYJĘĆ</h2>
      <table>
        <tr>
          <td>Poniedzialek</td>
          <td>15:00 - 19:00</td>
        </tr>
        <tr>
          <td>Wtorek</td>
          <td>15:00 - 19:00</td>
        </tr>
      </table>
    </section>
  </main>
</body>

</html>