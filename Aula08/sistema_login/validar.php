<!-- validar.php -->
<?php
    // Inicia a sessão e inclui o arquivo de conexão com o banco de dados
    session_start(); // Inicia a sessão
    include ("conexao.php"); // Inclui o arquivo de conexão com o banco de dados
    $usuario = $_POST['usuario']; // Obtém o nome de usuário do formulário
    $senha = $_POST['senha']; // Obtém a senha do formulário

    // Consulta SQL para verificar se o usuário e a senha existem na tabela "usuarios"
    $sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND senha='$senha'";
    $resultado = mysqli_query($conexao, $sql); // Executa a consulta SQL
    
    // Verifica se a consulta retornou algum resultado
    if (mysqli_num_rows($resultado) > 0) {
        // Se a consulta retornar um resultado, o login é bem-sucedido
        $_SESSION['usuario'] = $usuario; // Armazena o nome de usuário na sessão
        header("Location: painel.php"); // Redireciona para a página do painel
    } else {
        // Se a consulta não retornar resultados, o login falhou
        echo "Usuário ou senha inválidos."; // Exibe uma mensagem de erro
    }
?>