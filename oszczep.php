<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rzut oszczepem</title>
    <link rel="stylesheet" href="styl_oszczep.css">
</head>

<body>
    <header>
        <h1>Klub sportowy: rzut oszczepem</h1>
    </header>
    <main>
        <h1>Nasz rekord:
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'sportowcy');
            $query1 = "SELECT max(`wynik`) as 'max' FROM `wyniki` WHERE `dyscyplina_id`=3;";
            $wynik = mysqli_fetch_array(mysqli_query($con, $query1));
            echo $wynik['max'] . 'm</h1>';
            $query2 = "SELECT COUNT(`id`) as 'row' FROM `sportowiec`;";
            $wynik2 = mysqli_fetch_array(mysqli_query($con, $query2));
            $row = $wynik2['row'];
            echo '<table><tr>';
            for ($x = 1; $x <= $row; $x++) {
                $query3 = "SELECT `imie`,`nazwisko` FROM `sportowiec` WHERE `id`='" . $x . "'";
                $wynik3 = mysqli_fetch_array(mysqli_query($con, $query3));
                $query4 = "SELECT AVG(`wynik`) as avg FROM `wyniki` INNER JOIN `sportowiec` on `wyniki`.`sportowiec_id`=`sportowiec`.`id` WHERE `dyscyplina_id`='3' and`sportowiec`.`id` ='" . $x . "'";
                $wynik4 = mysqli_fetch_array(mysqli_query($con, $query4));
                echo '<td>';
                echo '<h3>' . $wynik3['imie'] . " " . $wynik3['nazwisko'] . '</h3><p>średni wynik ' . $wynik4['avg'] . '</p>';
                echo '</td>';
                if ($x % 2 == 0) {
                    echo '</tr>';
                    echo '<tr>';
                }
            }
            echo '</tr></table>';
            mysqli_close($con);
            ?>
    </main>
    <footer>
        <p>Klub sportowy</p>
        Strone opracował: 12312321
    </footer>


</body>

</html>