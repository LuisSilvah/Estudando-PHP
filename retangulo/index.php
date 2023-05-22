<?php 
class Retangulo {
    private $base;
    private $altura;

    public function setBase($base) {
        if (is_numeric($base) && $base > 0) {
            $this->base = $base;
        } else {
            throw new Exception("Base inválida. A base deve ser um número positivo.<br>");
        }
    }

    public function setAltura($altura) {
        if (is_numeric($altura) && $altura > 0) {
            $this->altura = $altura;
        } else {
            throw new Exception("Altura inválida. A altura deve ser um número positivo.<br>");
        }
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->base + $this->altura);
    }
}

// Criando um objeto da classe Retangulo
$retangulo = new Retangulo();

try {
    // Definindo uma base e altura inválidas para o retângulo
    $retangulo->setBase("abc");
    $retangulo->setAltura(-10);
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

// Calculando a área e o perímetro do retângulo
echo "Área do retângulo: " . $retangulo->calcularArea() . "\n";
echo "Perímetro do retângulo: " . $retangulo->calcularPerimetro();
