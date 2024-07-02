<?php

// Definizione della CLASSE Movie
// La classe è lo scheletro o il modello che definisce le caratteristiche e i comportamenti che gli oggetti creati da essa avranno.
class Movie
{
    // Dichiarazione delle VARIABILI D'ISTANZA
    // Proprietà Sono variabili che memorizzano dati relativi all'oggetto
    public $titolo;
    public $anno;
    public $lingua;

    // COSTRUTTORE della classe Movie
    // INIZIALIZZA le variabili d'istanza con i VALORI passati come PARAMETRI
    public function __construct($_titolo, $_anno, $_lingua)
    {
        $this->titolo = $_titolo;  // INIZIALIZZA la variabile titolo
        $this->anno = $_anno;      // INIZIALIZZA la variabile anno
        $this->lingua = $_lingua;  // INIZIALIZZA la variabile lingua
    }

    // funzione che ritorna la descrizione completa del film
    public function getDescription() {
        return "Titolo: $this->titolo, Anno: $this->anno, Lingua: $this->lingua";
    }
}

?>
<!-- Quando crei un oggetto, puoi assegnare qualsiasi valore desideri alle proprietà. Questi valori possono essere diversi per ogni oggetto creato dalla stessa classe! -->