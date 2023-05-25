<?php

class Interruptor
{

    private $interruptor;
    private $lampada;

    // Metodo de verificar o valor do interromper e acrescentar a marca da lampada

    public function AcenderLuz($interruptor, $lampada)
    {
        if (is_int($interruptor)) {
            $this->lampada = $lampada;
            $this->interruptor = $interruptor;
            $this->GetLuz();
        } else {
            echo "Valor inválido. Deve ser 0 ou 1.<br>";
        }
    }


    // Metodo de mostrar em tela se a luz está apaga ou acessa

    public function GetLuz()
    {
        if ($this->interruptor === 1) {
            echo "Lampada Acessa<br>Marca: " . $this->lampada->marca . "<br>";
            echo "Wolts: " . $this->lampada->wolts . "<br>";
        } else {
            echo "Lampada Apagada";
        }
    }
}
