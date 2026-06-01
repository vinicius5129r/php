<?php
function ordenarCrescente(&$vetor) {
    $n = count($vetor);
    
    // Bubble Sort - ordenação manual com estruturas de repetição
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Comparação e troca de valores
            if ($vetor[$j] > $vetor[$j + 1]) {
                // Troca os valores
                $temp = $vetor[$j];
                $vetor[$j] = $vetor[$j + 1];
                $vetor[$j + 1] = $temp;
            }
        }
    }
}

$numeros = array();
$numerosOrdenados = null;
$enviado = false;

if (isset($_POST['enviar'])) {
    $enviado = true;
    for ($i = 0; $i < 10; $i++) {
        if (isset($_POST["numero$i"])) {
            $numeros[] = (float) $_POST["numero$i"];
        }
    }
    
    if (count($numeros) == 10) {
        $numerosOrdenados = $numeros;
        ordenarCrescente($numerosOrdenados);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 05</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
		.numeros { display: flex; flex-wrap: wrap; gap: 10px; }
		.numeros label { flex: 1 0 100px; }
		.numeros input { flex: 1 0 150px; padding: 5px; }
        button { padding: 10px 20px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .resultado { margin-top: 20px; padding: 15px; background-color: #f0f0f0; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Questão 05</h1>
    <p>Informe 10 números para serem organizados em ordem crescente sem usar funções prontas de ordenação.</p>
    
    <form method="post" action="">
        <div class="numeros">
            <?php for ($i = 0; $i < 10; $i++): ?>
                <label for="numero<?php echo $i; ?>">Número <?php echo $i + 1; ?>:</label>
                <input type="number" step="any" name="numero<?php echo $i; ?>" id="numero<?php echo $i; ?>" value="<?php echo isset($numeros[$i]) ? htmlspecialchars($numeros[$i]) : ''; ?>" required>
            <?php endfor; ?>
        </div>
        <button type="submit" name="enviar">Ordenar</button>
    </form>

    <?php if ($enviado && $numerosOrdenados !== null): ?>
        <div class="resultado">
            <h2>Resultados:</h2>
            <p><strong>Números originais:</strong> <?php echo implode(', ', $numeros); ?></p>
            <p><strong>Números ordenados (crescente):</strong> <?php echo implode(', ', $numerosOrdenados); ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
