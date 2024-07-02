<?php

// Definizione della CLASSE Movie
class Movie {
    // Dichiarazione delle VARIABILI D'ISTANZA
    public $titolo;
    public $anno;
    public $lingua;

    // COSTRUTTORE della classe Movie
    // INIZIALIZZA le variabili d'istanza con i VALORI passati come PARAMETRI
    public function __construct($_titolo, $_anno, $_lingua) {
        $this->titolo = $_titolo;  // INIZIALIZZA la variabile titolo
        $this->anno = $_anno;      // INIZIALIZZA la variabile anno
        $this->lingua = $_lingua;  // INIZIALIZZA la variabile lingua
    }
}

?>
