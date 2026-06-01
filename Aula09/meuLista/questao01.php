<?php
function sinal($x) {
	return ($x > 0) ? 'P' : 'N';
}

$resultado = null;
$valor = null;
if (isset($_POST['valor'])) {
	$valor = (float) $_POST['valor'];
	$resultado = sinal($valor);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Questão 01</title>
	<style>
		body { font-family: Arial, sans-serif; margin: 20px; }
		input { padding: 5px; width: 100px; }
		button { padding: 10px 20px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
		button:hover { background-color: #0056b3; }
		.resultado { margin-top: 20px; padding: 15px; background-color: #f0f0f0; border-radius: 5px; }
	</style>
</head>
<body>
	<h1>P OU N</h1>
	<p>Informe um número e a função retornará <strong>P</strong> se for positivo ou <strong>N</strong> se for zero ou negativo.</p>
	<form method="post" action="">
		<label for="valor">Número:</label>
		<input type="number" step="any" name="valor" id="valor" value="<?php echo htmlspecialchars($valor); ?>" required>
		<button type="submit">Enviar</button>
	</form>

	<?php if ($resultado !== null): ?>
		<div class="resultado">
			<p>Valor: <?php echo htmlspecialchars($valor); ?> <br> Resultado: <strong><?php echo $resultado; ?></strong></p>
		</div>
	<?php endif; ?> <!-- Exibe o resultado apenas se um valor foi enviado -->
</body>
</html>
