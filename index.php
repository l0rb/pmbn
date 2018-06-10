<?php

$first = [
   'Ancient',
   'Black',
   'Daughters of',
   'Darkness of',
   'Dragon',
   'Dragons of',
   'Eternal',
   'Fairy-',
   'First',
   'Glorious',
   'Hammer of',
   'Hobbits of',
   'Keeper of',
   'Knights and',
   'Mighty',
   'Power-',
   'Powerful',
   'Red-',
   'Sons of',
   'Steel-',
   'Sword of',
   'Storm of',
   'Symphony of',
   'Tale of',
   'The Metal',
   'True',
   'Void',
   'War of',
   'Warriors of',
   'Woods of',
];

$second = [
   'Angels',
   'Beast',
   #'Darkness',
   'Dragons',
   'Fear',
   'Fire',
   'Glory',
   'Guardian',
   'Hobbits',
   'Ice',
   'Iron',
   'Light',
   'Mercy',
   'Metal',
   'Second',
   'Steel',
   'Storm',
   'Sword', 
   'Time',
   'Twilight',
   'War',
   'Warriors',
   'Wizards',
];

do {
   $first = r($first);
   $second = r($second);
} while(too_similar($first, $second));

if(strpos($first, '-'))
    $first = substr($first, 0, -1);
else
    $first .= ' ';

$bandname = $first . $second;

function r($array) { return $array[array_rand($array)]; }
function too_similar($a, $b) { return substr($a, 0, 4) === substr($b, 0, 4); }

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

