<?php
// collego file movie.php
require_once __DIR__ . '/classes/movie.php';

$movie = new Movie(_titolo:"titolo del film", _anno:"anno del film", _lingua:"lingua del film");

echo('titolo del film:' . $movie->titolo . 'lingua del film:' . $movie->lingua . 'anno di uscita:' . $movie->anno);
?>