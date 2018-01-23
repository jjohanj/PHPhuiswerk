<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo "PHP assignment by: \"Johan Jorritsma\" (fix PHP syntax errors)" ?></title> <!-- correctie spelling assignment, escape karaters toegevoegd -->
  </head>

  <body>
      <?php
        $ages = array (10, 50, 39, 40, 67, 99, 7, 2, 10, 88); // array toegevoegd, () ipv {}, Een 0 ipv o
        $sum = 0;

        function getAverageAge() { //input weggehaald
          global $ages, $sum; // $ages en $sum global gemaakt, zodat ze gebruikt kunnen worden in functie
          for($i=0; $i<count($ages); $i++) { //$i=0 ipv $i=1, zodat hij bij de eerste index van array begint

            $sum += $ages[$i]; // $ages ipv $input
          }

        return $sum / count($ages); // $sum delen door de lengte van de array, om het gemiddelde te krijgen
        }

        echo getAverageAge($ages);
        ?> <!--php sluiten -->
  </body>
</html>
