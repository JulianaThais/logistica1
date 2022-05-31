<?php
$nome = $_POST['nome_cad'];
$email = $_POST['email_cad'];
$senha = $_POST['senha_cad'];

$strcon = mysqli_connect('localhost','root','','nvusuario') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO nvusuario VALUES ";
$sql .= "('$nome', '$email', '$senha')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!<br>";
?>

