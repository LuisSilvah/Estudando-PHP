<?php
class Usuario
{
    private $idade;

    public function setidade($idade)
    {
        if (is_int($idade) && $idade > 0) {
            $this->idade = $idade;
        } else {
            throw new Exception("Idade inválida. A idade deve ser um número inteiro positivo.");
        }
    }

    public function getidade()
    {
        if ($this->idade) {
            echo "Idade do usuário: " .  $this->idade;
        } else {
            echo " Idade Inválida";
        }
    }
}

// Criando um objeto da classe Usuario
$usuario = new Usuario();

try {
    // Definindo uma idade para o usuário
    $usuario->setidade("abc");
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

// Obtendo a idade do usuário usando o método getidade
echo $usuario->getidade();
