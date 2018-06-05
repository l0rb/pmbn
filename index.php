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

echo '<br>';
echo 'Your epic band of legendary smiths of Music shall be known as:<br>';
echo '<br>&nbsp;&nbsp;&nbsp;<b>' . $bandname . '</b><br>';
echo '<br>';
echo 'Press F5 or reload for new Name';

function r($array) { return $array[array_rand($array)]; }

