<?php
// COLLEGAMENTO del file movie.php che contiene la definizione della CLASSE Movie
require_once __DIR__ . '/classes/movie.php';

// Creazione di un'ISTANZA della classe Movie con specifici VALORI per titolo, anno e lingua
$movie = new Movie(_titolo:"titolo del film", _anno:"anno del film", _lingua:"lingua del film");

// Stampa dei VALORI delle PROPRIETà dell'OGGETTO Movie
echo('Titolo del film: ' . $movie->titolo . '  ' . 'Lingua del film: ' . $movie->lingua . '  ' . 'Anno di uscita: ' . $movie->anno);
?>
