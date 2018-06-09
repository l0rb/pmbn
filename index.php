<?php

$first = [
   'Ancient',
   'Daughters of',
   'Darkness of',
   'Dragon',
   'Dragons of',
   'Eternal',
   'Fairy-',
   'Hammer of',
   'Keeper of',
   'Power-',
   'Sons of',
   'Sword of',
   'Symphony of',
   'Void',
];

$second = [
   'Beast',
   'Dragons',
   'Fear',
   'Fire',
   'Glory',
   'Guardian',
   'Ice',
   'Storm',
   'Sword', 
   'Time',
   'Twilight',
   'Wizards',
];

do {
   $first = r($first);
   $second = r($second);
} while(substr($first, 0, 4) === substr($second, 0, 4));

if(strpos($first, '-'))
    $first = substr($first, 0, -1);
else
    $first .= ' ';

$bandname = $first . $second;

function r($array) { return $array[array_rand($array)]; }

?>

<html>
 <head>
  <title>Bandnames by l0rb</title>
 </head>
 <body>
  <br>
  Your epic band of legendary smiths of Music shall be known as:<br>
  <br>
  &nbsp;&nbsp;&nbsp;<b><?=$bandname;?></b><br>
  <br>
  Press F5 or reload for new Name
 </body>
</html>

