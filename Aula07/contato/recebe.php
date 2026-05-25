<?php
//Receber os dados do formulário
$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$telefone = $_POST['txttelefone'];
$endereco = $_POST['txtendereco'];
$obs = $_POST['txtobs'];
$dataAniv = $_POST['txtdataaniv'];

//conexão com o banco de dados
$conexaoBD = mysqli_connect("localhost", "root", "", "meu_banco", 3307);
//Verificar se a conexão foi bem-sucedida
if(!$conexaoBD){
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
//SQL para inserir os dados
$sql = "INSERT INTO contato_tab(ds_nome, ds_email, ds_telefone, ds_endereco, ds_observacao, dt_aniversario) VALUES ('$nome', '$email', '$telefone', '$endereco', '$obs', '$dataAniv')";
//Executar a consulta SQL
$resultado = mysqli_query($conexaoBD, $sql);
//Verificar se a consulta foi bem-sucedida
if($resultado){
    echo "Contato cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar contato: " . mysqli_error($conexaoBD);
}
//Fechar a conexão com o banco de dados
mysqli_close($conexaoBD);
?>