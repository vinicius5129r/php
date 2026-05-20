<?php
//testando objeto
class Pessoa { // Define a classe Pessoa
    public $nome; // Propriedade pública para armazenar o nome da pessoa
    public $idade; // Propriedade pública para armazenar a idade da pessoa

    // Método construtor para inicializar as propriedades da classe
    public function __construct($nome, $idade) { // Método construtor para inicializar as propriedades da classe
        $this->nome = $nome; // Atribui o valor do nome à propriedade nome
        $this->idade = $idade; // Atribui o valor da idade à propriedade idade
    }

    // Método para apresentar as informações da pessoa
    public function apresentar() { // Método para apresentar as informações da pessoa
        return "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos."; // Retorna uma string com as informações da pessoa
    }
}
// Criando um objeto da classe Pessoa
$pessoa1 = new Pessoa("José Vinícius", 20); // Cria um objeto da classe Pessoa com o nome "José Vinícius" e idade 20
echo $pessoa1->apresentar(); // Chama o método apresentar do objeto $
?>