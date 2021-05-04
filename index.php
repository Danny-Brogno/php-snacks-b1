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

      header {
        color: white;
        display: flex;
        justify-content: center;
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
             "home" => "Toronto Raptors",
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

          // var_dump(array_keys($nbaSchedule)); die();
          // $test = $nbaSchedule['home'];
          // echo $test;
          for ($x = 0; $x < count($nbaSchedule); $x++) {

            $individualGame = $nbaSchedule[$x];
            var_dump($individualGame);
          }

         ?>
      </h1>
    </header>

  </body>

</html>
