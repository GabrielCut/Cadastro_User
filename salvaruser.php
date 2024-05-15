<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formulario-gabriel";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    $data_nascimento = $_POST["data_nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $endereco = $_POST["endereco"];

    // Insere os dados na tabela
    $sql = "INSERT INTO usuarios (nome, senha, email, telefone, sexo, data_nasc, cidade, estado, endereco)
            VALUES ('$nome', '$senha', '$email', '$telefone', '$sexo', '$data_nascimento', '$cidade', '$estado', '$endereco')";

  
?>