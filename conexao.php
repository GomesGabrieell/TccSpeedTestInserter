<?php
$hostname = 'localhost'; // Endereço do servidor do banco de dados
$dbname = 'fastVelocidade'; // Nome do banco de dados
$username = 'gabriel@db'; // Nome de usuário do banco de dados
$password = 'gabriel@dbgabriel@dbgabriel@dbgabriel@db2023'; // Senha do banco de dados

try {
    // Criar uma conexão PDO
    $conexao = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

    // Definir o modo de erro do PDO para exceções
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
