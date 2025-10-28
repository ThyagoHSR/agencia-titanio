<?php
$servername = "SEU_HOST";
$username   = "SEU_USUARIO";
$password   = "SUA_SENHA";
$dbname = "agencia_titanio"; // nome do banco MySQL (gerado ao importar o arquivo assets/sql/leads_titanio.sql)

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>

