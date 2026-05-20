<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
    $data_consulta = filter_input(INPUT_POST, 'data_consulta', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($nome && $idade && $email && $cpf && $data_consulta) {
        echo "<h1>Dados do Paciente</h1>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Idade:</strong> $idade anos</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>CPF:</strong> $cpf</p>";
        echo "<p><strong>Data da Consulta:</strong> $data_consulta</p>";
    } else {
        echo "<h1>Erro: Dados inválidos ou incompletos.</h1>";
    }
?>