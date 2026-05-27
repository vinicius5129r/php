<!-- conexao.php -->
<?php
    // Configurações de conexão com o banco de dados MySQL
    $host = 'localhost'; // Endereço do servidor MySQL
    $usuario = 'root'; // Nome de usuário do MySQL
    $senha = ''; // Senha do MySQL
    $banco = 'sistema_login'; // Nome do banco de dados
    $porta = 3307; // Porta do MySQL (padrão é 3307 para XAMPP)
    // Cria a conexão com o banco de dados usando mysqli
    $conexao = mysqli_connect($host, $usuario, $senha, $banco, $porta);
    // Verifica se a conexão foi bem-sucedida
    if (!$conexao) {
        die("Erro de conexao: " . mysqli_connect_error());
    }
?>