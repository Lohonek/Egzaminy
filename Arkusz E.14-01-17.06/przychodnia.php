<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="banner">
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>
    <main>
        <div class="left">
            <h3>LISTA PACJENTOW</h3>
            <?php

            $c  = mysqli_connect('localhost', 'root');
            $con = mysqli_select_db($c, 'przychodnia');
            $kwe = "SELECT id, imie, nazwisko FROM pacjenci";
            $d = mysqli_query($c, $kwe);

            while ($wynik = mysqli_fetch_array($d)) {
                echo $wynik['id'] . ' ' . $wynik['imie'] . ' ' . $wynik['nazwisko'] . '<br>';
            }

            mysqli_close($c);

            ?>

            <br><br>
            <form action="pacjent.php" method="post">
                <p>podaj id</p><br>
                <input type="number" name="number" id="id">
                <input type="submit" value="Pokaz dane">
                <h3>LEKARZE</h3>
                <ul>1
                    <li> pn - śr
                        <ol>
                            <li>Anna Kwiatkowska</li>
                            <li>Jan Kowaleski</li>
                        </ol>
                    </li>
                    <li> czw - pt
                        <ol>
                            <li>Krzysztof Nowak</li>
                        </ol>
                    </li>
                </ul>

            </form>
        </div>
        <div class="right">
            <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
            <p>Brak wybranego pacjenta</p>
        </div>
    </main>
    <div class="footer">
        utworzone przez: 123123312 <br>
        <a href="">Pobierz plik z kwerendami</a>
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .banner {
            background-color: rgb(66, 22, 42);
            color: white;
            font-size: 140%;
            text-align: center;
            height: 100px;
        }

        .left {
            background-color: rgb(142, 115, 110);
            width: 30%;
            height: 600px;
            color: white;
        }

        main {
            display: flex;
        }

        .right {
            background-color: rgb(230, 230, 230);
            width: 70%;
            height: 600px;
            font-size: 120%;
        }

        .footer {
            background-color: rgb(142, 115, 110);
            color: white;
            text-align: right;
            height: 100px;
        }
    </style>
</body>

</html>