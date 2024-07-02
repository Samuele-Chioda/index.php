<?php

class Books
{

    public $titolo;
    public $numPag;
    public $colore;

    public function __construct($_titolo, $_numPag, $_colore)
    {
        $this->titolo = $_titolo;
        $this->numPag = $_numPag;
        $this->colore = $_colore;
    }
}
