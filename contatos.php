
<?php
$name = $_POST['name'];
$e_mail = $_POST['e_mail'];
$message = $_POST['Message'];

$strcon = mysqli_connect('localhost','root','','faleconosco') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO faleconosco VALUES ";
$sql .= "('$name', '$e_mail', '$message')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Mensagem enviada com sucesso!<br>";
?>



