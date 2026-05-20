<?php
  $cpf = $_POST['cpf'];
  $dependentes = $_POST['dependentes'];
  $renda = $_POST['renda'];
  function calcularImposto($cpf, $dependentes, $renda) {
    $salarioMinimo = 1320.00; // Valor do salário mínimo
    $descontoDependentes = $dependentes * ($salarioMinimo * 0.05); // Desconto por dependente
    $rendaLiquida = $renda - $descontoDependentes; // Renda líquida após desconto

    if ($rendaLiquida <= 2 * $salarioMinimo) {
      return "Isento";
    } elseif ($rendaLiquida > 2 * $salarioMinimo && $rendaLiquida <= 3 * $salarioMinimo) {
      return "5%";
    } elseif ($rendaLiquida > 3 * $salarioMinimo && $rendaLiquida <= 5 * $salarioMinimo) {
      return "10%";
    } elseif ($rendaLiquida > 5 * $salarioMinimo && $rendaLiquida <= 7 * $salarioMinimo) {
      return "15%";
    } else {
      return "20%";
    }
  }
    $imposto = calcularImposto($cpf, $dependentes, $renda);
    echo "CPF: $cpf<br>";
    echo "Dependentes: $dependentes<br>";
    echo "Renda: R$ $renda<br>";
    echo "Imposto de Renda: $imposto";
?>
