<?php
$Placa = $_POST['Placa'];
$Renavam = $_POST['Renavam'];
$Chassi = $_POST['Chassi'];
$Marca = $_POST['Marca'];
$Modelo = $_POST['Modelo'];
$Cor = $_POST['Cor'];
$Ano = $_POST['Ano'];
$Combustível = $_POST['Combustível'];
$Estado = $_POST['Estado'];
$Cidade = $_POST['Cidade'];
$RNTRC = $_POST['RNTRC'];
$documento = $_POST['documento'];
$Lotação = $_POST['Lotação'];
$Capacidade = $_POST['Capacidade'];
$Categoria = $_POST['Categoria'];


$strcon = mysqli_connect('localhost','root','','fornecedor') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO fornecedor VALUES ";
$sql .= "('$Placa', '$Renavam', '$Chassi', '$Marca', '$Modelo' , '$Cor', '$Ano', '$Combustível', '$RNTRC', '$documento', '$Lotação' , '$Capacidade', '$Categoria')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Veiculo cadastrado com sucesso!<br>";


