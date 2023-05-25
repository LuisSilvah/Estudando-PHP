<?php

// Construtor da lampada onde podemos acrescentar valores relevante a lampada

class Lampada
{

    public $marca;
    public $wolts;

    public function __construct($marca, $wolts)
    {
        $this->marca = $marca;
        $this->wolts = $wolts;
    }
}
