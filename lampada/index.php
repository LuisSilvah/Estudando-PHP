<?php

require_once './lampada.php';
require_once './interruptor.php';

//1ª Etapa: Instanciar as classes (criar objetos)
$lampada = new Lampada("Lenovo", "200W");
$interruptor = new Interruptor();

//2ª Etapa: Acender a Luz
$interruptor->AcenderLuz(0, $lampada);

