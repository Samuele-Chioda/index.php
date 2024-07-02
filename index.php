<?php
// COLLEGAMENTO del file movie.php che contiene la definizione della CLASSE Movie
require_once __DIR__ . '/classes/movie.php';

// Creazione di un'ISTANZA della classe Movie con specifici VALORI per titolo, anno e lingua
$movie = new Movie(_titolo: "The Hobbit", _anno: "1999", _lingua: "hobbitese");

// Stampa dei VALORI delle PROPRIETà dell'OGGETTO Movie
echo ('Titolo del film: ' . $movie->titolo . '  ' . 'Lingua del film: ' . $movie->lingua . '  ' . 'Anno di uscita: ' . $movie->anno);
echo '<br>';

// puoi creare quanti OGGETTI vuoi partendo dalla CLASSE in movie.php, ogni oggetto può avere i VALORI delle PROPRIETà diversi dall'oggetto precedente(IN SOSTANZA LA CLASSE è LO SCHELETRO, E QUI NE DEFINISCO LE CARATTERISTICHE)
$movie2 = new Movie(_titolo: "The Shark", _anno: 2022, _lingua: "Inglese");
echo ('Titolo del film:' . $movie2->titolo . ' ' . 'anno di uscita:' . $movie2->anno . ' ' . 'lingua del film:' . $movie2->lingua);
echo '<br>';



// recupero file books.php
require_once __DIR__ . '/classes/books.php';

// nel caso qui sotto a differenza di quello sopra i valori delle proprietà li passo direttamente senza specificare a quale proprietà appartengono poichè seguono l'indice di come sono state scritte in books.php e quindi il primo valore che metto sarà il titolo perchè il books.php la prima proprietà scritta è appunto il titolo!
$book1 = new Books('Il mare', 200, 'rosso');

// specifica sempre con -> per fare riferimento alla proprietà di cui vogliamo stampare il valore!
echo ($book1->titolo . $book1->numPag . $book1->colore);
