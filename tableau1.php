<?php

$movies = [
"Les Aventurier de l'arche perdue" => "1981",
"Indiana Jones et le Temple maudit" => "1984",
"Indiana Jones et la Dernière croisade" => "1989"
];

foreach ($movies as $key => $movie){
  sort ($movies);
  echo $movie .PHP_EOL;
  echo $key .PHP_EOL;
  }
 
 ?>
