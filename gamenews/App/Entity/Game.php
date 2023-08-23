<?php

namespace App\Entity;

class Game
{

    private $id;
    private $titulo;
    private $descricao;
    private $videoId;

    // Construtor
    public function __construct($id = 0, $titulo = '', $descricao = '', $videoId = '')
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->videoId = $videoId;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }


    // Getter
    public function getId($id)
    {
        return  $this->id = $id;
    }

    public function getTitulo($titulo)
    {
        return $this->titulo = $titulo;
    }

    public function getDescricao($descricao)
    {
        return $this->descricao = $descricao;
    }

    public function getVideoId($videoId)
    {
        return  $this->videoId = $videoId;
    }
}
