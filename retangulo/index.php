<?php
class Retangulo
{
    private $base;
    private $altura;

    public function setBase($base)
    {
        if (is_numeric($base) && $base > 0) {
            $this->base = $base;
        } else {
            throw new Exception("Base inválida. A base deve ser um número positivo.<br>");
        }
    }

    public function setAltura($altura)
    {
        if (is_numeric($altura) && $altura > 0) {
            $this->altura = $altura;
        } else {
            throw new Exception("Altura inválida. A altura deve ser um número positivo.<br>");
        }
    }

    public function calcularArea()
    {
        if ($this->base && $this->altura) {
            echo "Área do retângulo: " . $this->base * $this->altura . "<br>";
        } else {
            echo "";
        }
    }

    public function calcularPerimetro()
    {
        if ($this->base && $this->altura) {
            echo "Perímetro do retângulo: " . 2 * ($this->base + $this->altura) . "<br>";
        } else {
            echo "";
        }
    }
}

// Criando um objeto da classe Retangulo
$retangulo = new Retangulo();

try {
    // Definindo uma base e altura para o retângulo
    $retangulo->setBase(10);
    $retangulo->setAltura(10);
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

// Calculando a área e o perímetro do retângulo
echo  $retangulo->calcularArea();
echo  $retangulo->calcularPerimetro();
