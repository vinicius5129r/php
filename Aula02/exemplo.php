<?php

    define("QTDE_ALUNOS", 30, FALSE); // define("QTDE_ALUNOS", 30, TRUE); // case-insensitive
    echo "Quantidade de alunos da disciplina: ".QTDE_ALUNOS; // echo "Quantidade de alunos da disciplina: ".qtde_alunos; // case-insensitive
    echo "<br>";
    
    echo "Quantidade de alunos da disciplina: ".constant("QTDE_ALUNOS"); // echo "Quantidade de alunos da disciplina: ".constant("qtde_alunos"); // case-sensitive
    echo "<br>";
    
    if (defined("QTDE_ALUNOS"))
        echo "O valor da constante é : ".QTDE_ALUNOS; // if (defined("qtde_alunos")) // case-sensitive
    echo "<br>";

    print_r(get_defined_constants()); // print_r(get_defined_constants(true)); // para exibir as constantes definidas pelo usuário

?>