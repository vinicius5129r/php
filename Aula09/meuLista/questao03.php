<?php
function imprimirPiramide($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo $i . " ";
        }
        echo "<br>";
    }
}

$n = null;
if (isset($_POST['n'])) {
    $n = (int) $_POST['n'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 03</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        label { display: block; margin-bottom: 5px; }
        input { padding: 5px; width: 100px; }
        button { padding: 10px 20px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        pre { font-family: monospace; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Questão 03</h1>
    <p>Informe um valor n para imprimir a pirâmide numérica.</p>
    <form method="post" action="">
        <label for="n">Valor de n:</label>
        <input type="number" name="n" id="n" min="1" max="50" value="<?php echo htmlspecialchars($n); ?>" required>
        <button type="submit">Gerar</button>
    </form>

    <?php if ($n !== null && $n > 0): ?>
        <h2>Resultado:</h2>
        <pre>
<?php imprimirPiramide($n); ?>
        </pre>
    <?php endif; ?>
</body>
</html>
