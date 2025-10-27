<?php
/**
 * Arquivo de conexão com o banco de dados MySQL
 * Substitua os valores abaixo pelas credenciais do seu banco
 */

$servername = "SEU_HOST"; 
$username   = "SEU_USUARIO";   
$password   = "SUA_SENHA";     
$dbname     = "NOME_DO_BANCO"; 

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica erros
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
