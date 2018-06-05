<?php

$first = ['Dragon', 'Dragons of', 'Sons of', 'Daughters of', 'Power-', 'Fairy-', 'Void', 'Symphony of', 'Hammer of', 'Keeper of', 'Ancient'];
$second = ['Dragons', 'Twilight', 'Fire', 'Ice', 'Time', 'Storm', 'Beast', 'Guardian', 'Wizards', 'Glory'];

$first = r($first);
$second = r($second);

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

