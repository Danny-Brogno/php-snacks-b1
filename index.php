<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-snacks-b1</title>
  </head>
  <body>
    <style>

      body {
        background-color: navy;
      }

      header, main {
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }

    </style>

    <header>
      <h1>
        <?php
          $nbaSchedule = [

            [
             "home" => "Los Angeles Lakers",
             "away" => "New York Knicks",
             "homeScore" => "88",
             "awayScore" => "65"
            ],
            [
             "home" => "Springfield Isotopi",
             "away" => "Boston Celtics",
             "homeScore" => "64",
             "awayScore" => "63"
            ],
            [
             "home" => "Miami Heat",
             "away" => "Chicago Bulls",
             "homeScore" => "1",
             "awayScore" => "76"
            ],
            [
             "home" => "Dallas Mavericks",
             "away" => "Cleveland Cavaliers",
             "homeScore" => "71",
             "awayScore" => "65"
            ],
            [
             "home" => "Detroit Falcons",
             "away" => "Toronto Raptors",
             "homeScore" => "59",
             "awayScore" => "61"
            ],

        ]; // END OF $nbaSchedule

        // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.Olimpia Milano - Cantù | 55-60

          for ($x = 0; $x < count($nbaSchedule); $x++) {
            $individualGame = $nbaSchedule[$x];

            // HOME TEAM
            $homeTeam = $individualGame["home"];

            // AWAY TEAM
            $awayTeam = $individualGame["away"];

            // HOME SCORE
            $homeScore = $individualGame["homeScore"];

            // AWAY SCORE
            $awayScore = $individualGame["awayScore"];

            // RESULTS
            echo $homeTeam . " - " . $awayTeam . " | score = " . $homeScore . " - " . $awayScore . "<br>";
          }

         ?>
      </h1>
    </header>

    <main>

      <h2>
        <?php
        // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
        echo $_GET["name"];
        echo $_GET["email"];
        echo $_GET["age"];

        echo "<br>";

        $name = $_GET["name"];
        $email = $_GET["email"];
        $age = $_GET["age"];

        $findDot = ".";
        $findAt = "@";
        $searchDot = strpos($email, $findDot);
        $searchAt = strpos($email, $findAt);

        if( (strlen($name) > 3) && ( ($searchDot !== false) && ($searchAt !== false) ) && (is_numeric($age) == true ) ) {
          echo "Accesso riuscito";
        } else {
          echo "Accesso negato";
        }

        ?>
      </h2>
    </main>

  </body>

</html>
