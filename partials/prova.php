<?php

include __DIR__ .'/Models/movie.php';

$film1 = new Movie('film1', 'film1', 'en', '1990-05-25', '9');
$film1->title = 'film1';

$film2 = new Movie('film2', 'film2', 'en', '1990-05-25', '9');
$film2->title = 'film2';

var_dump($film1);
var_dump($film2);

?>