<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefone = $conn->real_escape_string($_POST['telefone']);
    $empresa = $conn->real_escape_string($_POST['empresa']);

    $sql = "INSERT INTO leads_titanio (nome, email, telefone, empresa)
            VALUES ('$nome', '$email', '$telefone', '$empresa')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }

    $conn->close();
}
?>
