<!-- painel.php -->
<?php
    // Inicia a sessão para acessar as variáveis de sessão
    session_start();
    // Verifica se a variável de sessão "usuario" está definida
    if (!isset($_SESSION['usuario'])) {
        // Se a variável de sessão não estiver definida, redireciona para a página de login
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Painel do Usuário</h1>
    <p>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</p>
    <a href="logout.php">Sair</a>
</body>
</html>