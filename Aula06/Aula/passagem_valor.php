<?php
    function nomeUsuario($nome) {
        echo 'O nome do usuário é: '.$nome;
        $nome = 'IFRO';
    }
    $user = 'CTI';
    nomeUsuario($user);
    echo '<br>O nome do usuário é: '.$user;
?>