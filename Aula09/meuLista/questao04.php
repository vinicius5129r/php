<?php
function fibonacci($quantidade = 15) {
    $sequencia = array();
    $a = 0;
    $b = 1;
    
    for ($i = 0; $i < $quantidade; $i++) {
        $sequencia[] = $a;
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
    
    return $sequencia;
}

$mostrar = false;
if (isset($_POST['gerar'])) {
    $mostrar = true;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 04</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        button { padding: 10px 20px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .resultado { margin-top: 20px; padding: 15px; background-color: #f0f0f0; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Sequência de Fibonacci</h1>
    <p>Clique no botão para exibir os 15 primeiros números da sequência de Fibonacci.</p>
    <form method="post" action="">
        <button type="submit" name="gerar">Gerar Sequência</button>
    </form>

    <?php if ($mostrar): ?>
        <div class="resultado">
            <h2>Sequência de Fibonacci (15 primeiros números):</h2>
            <p>
                <?php 
                $fib = fibonacci(15);
                echo implode(' ', $fib); // Exibe a sequência separada por espaços 
                ?>
            </p>
        </div>
    <?php endif; ?>
</body>
</html>
