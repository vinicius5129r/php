<?php
    // Inicia a sessão e define uma variável de sessão
    session_start();
    // Define uma variável de sessão para armazenar o nome do usuário
    $_SESSION['usuario'] = 'admin';
    // Exibe uma mensagem indicando que a sessão foi iniciada com sucesso
    echo 'Sessão iniciada com sucesso!';
?>