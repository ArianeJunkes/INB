<?php
$servidor = "localhost";
$base = "dbinb0243";
$usuario = "inb0243user";
$senha = "alunos";
try {
$conn = new PDO("mysql:host=$servidor;dbname=$base",$usuario, $senha);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<center><font color=purple><h1>Conectado do Servidor WEB com Sucesso a base:</font></h1>" .$base;
echo "<br><h2><font color=purple>8379</font></h2><br>";
echo "<br><h2><font color=purple>7940</font></h2></center>";

}catch(PDOException $e){
echo "Falha na conexão:" .$e -> getMessage();
}
?>

