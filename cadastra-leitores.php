<?php
include "config.php";
if (!$conn){
    die("Falha na conexão {mysqli_connect_error()}");
}

//receba os dados do formulário 
$nome = $_POST['nome'];
$dtnasc = $_POST['DtNasc'];
$celular = $_POST['Celular'];
$email = $_POST['Email'];
$ra = $_POST['RA'];
$endereco =$_POST['Endereço'];
$num_end = $_POST['Num_End'];
$bairro =$_POST['Bairro'];
$cidade =$_POST['Cidade'];

// criar variáveis para inserir o resistro
$sql ="INSERT INTO `leitores`
(`Nome`, `DtNasc`, `Celular`, `Email`, `RA`, `Endereco`, `NumEnd`, `Bairro`, `CidadeUF`) VALUES 
('$nome','$dtnasc','$celular','$email','$ra','$endereco','$num_end','$bairro', '$cidade')";

// Executa a consulta SQL. falhar, exibe o erro do banco de dados
$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $conn));

if($query){
    echo "<center>";
    echo "Cadrasto realizado com sucesso!! <br>";
    echo "<a href='index.php'><button title='Home pago'>Voltar<button></a>";
    echo "</center>";
} else {
 echo "<center>";
 echo "<a href='index.php'><button title='Home pago'>Voltar<button></a>";
 echo "</center>";
}
 ?>      