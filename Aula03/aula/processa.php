<?php
    // processa.php, recebe os dados do formulário e exibe. 
    // filter_input() é usado para validar e sanitizar os dados recebidos do formulário.
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($nome && $idade && $email) {
        echo "Dados recebidos com sucesso! <br>";
        echo "<br><b>Nome:</b> $nome <br>";
        echo "<b>Idade:</b> $idade <br>";
        echo "<b>Email:</b> $email <br>";
    } else {
        echo "Dados inválidos. Por favor, preencha corretamente.";
    }
?>