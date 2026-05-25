<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contatos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #111;
        }
        th, td {
            border: 1px solid #555;
            padding: 10px;
        }
        th {
            background-color: #222;
}
    </style>
</head>
<body>
    <h2>Lista de contatos</h2>
    <?php
    //conexão com o banco de dados
    $conexaoBD = mysqli_connect("localhost", "root", "", "meu_banco", 3307);
    //Verificar se a conexão foi bem-sucedida
    if (!$conexaoBD) {
        die("Conexão falhou: " . mysqli_connect_error());
    }
    //SQL para selecionar os dados
    $sql = "SELECT ds_nome, ds_email, ds_telefone, ds_endereco, dt_aniversario FROM contato_tab ORDER BY ds_nome";
    //Executar a consulta SQL
    $resultado = mysqli_query($conexaoBD, $sql);
    ?>
    </table>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Aniversário</th>
        </tr>
        <?php
        while ($registro = mysqli_fetch_assoc($resultado)){
        
        ?>
        <tr>
            <td><?php echo $registro['ds_nome']; ?></td>
            <td><?php echo $registro['ds_email']; ?></td>
            <td><?php echo $registro['ds_endereco']; ?></td>
            <td><?php echo $registro['ds_telefone']; ?></td>
            <td><?php echo date('d/m/Y', strtotime($registro['dt_aniversario'])); ?></td>
            </tr>
             <?php
        }
        ?>
    </table>
</body>
</html>
<?php
//Fechar a conexão com o banco de dados
mysqli_close($conexaoBD);
?>