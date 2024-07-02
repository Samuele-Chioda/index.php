<?php

class Movie{
    public $titolo;
    public $anno;
    public $lingua;

    public function __construct($_titolo, $_anno, $_lingua){
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->lingua = $_lingua;
    }

}





