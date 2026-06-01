<?php
function bissexto($ano) {
    return ($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0)) ? 1 : 0;
}

$resultado = null;
$ano = null;
// Verifica se o formulário foi enviado e processa o ano informado
if (isset($_POST['ano'])) {
    $ano = (int) $_POST['ano'];
    $resultado = bissexto($ano);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 02</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        input { padding: 5px; width: 100px; }
        button { padding: 10px 20px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .resultado { margin-top: 20px; padding: 15px; background-color: #f0f0f0; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Bissexto ou Não</h1>
    <p>Informe um ano inteiro positivo. A função retorna <strong>1</strong> se for bissexto ou <strong>0</strong> caso contrário.</p>
    <form method="post" action="">
        <label for="ano">Ano:</label>
        <input type="number" name="ano" id="ano" min="1" value="<?php echo htmlspecialchars($ano); ?>" required>
        <button type="submit">Verificar</button>
    </form>

    <?php if ($resultado !== null): ?>
        <div class="resultado">
            <p>Ano: <?php echo htmlspecialchars($ano); ?> - Bissexto? <strong><?php echo $resultado; ?></strong></p>
        </div>
    <?php endif; ?> <!-- Exibe o resultado apenas se um ano foi enviado -->
</body>
</html>
