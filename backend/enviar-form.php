<?php
include("conexao.php");

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefone = $conn->real_escape_string($_POST['telefone']);
    $empresa = $conn->real_escape_string($_POST['empresa']);

    $sql = "INSERT INTO leads_titanio (nome, email, telefone, empresa)
            VALUES ('$nome', '$email', '$telefone', '$empresa')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => $conn->error]);
    }

    $conn->close();
}
?>