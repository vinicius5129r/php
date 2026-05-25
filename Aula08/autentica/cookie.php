<?php
    // Define um cookie com o nome "usuario" e o valor "admin"
    setcookie("usuario", "admin", time() + 3600); // Expira em 1 hora
    // Exibe uma mensagem indicando que o cookie foi definido com sucesso
    echo 'Cookie definido com sucesso!';
?>                          