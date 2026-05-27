<?php
    // Verifica se o cookie "usuario" está definido
    if (isset($_COOKIE["usuario"])) {
        // Se o cookie estiver definido, exibe uma mensagem de boas-vindas
        echo 'Bem-vindo, ' . $_COOKIE["usuario"] . '!';
    } else {
        // Se o cookie não estiver definido, exibe uma mensagem de erro
        echo 'Cookie "usuario" não encontrado. Por favor, defina o cookie primeiro.';
    }
?>