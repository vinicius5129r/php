<!-- logout.php -->
<?php
    // Inicia a sessão e destrói a sessão para efetuar o logout
    session_start(); // Inicia a sessão
    session_destroy(); // Destroi a sessão, removendo todas as variáveis de sessão
    header("Location: login.php"); // Redireciona para a página de login
?>