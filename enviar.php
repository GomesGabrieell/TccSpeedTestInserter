<?php

// Inclua o arquivo de configuração de conexão com o banco de dados (conexao.php)
include 'conexao.php';

// Inclua o arquivo externo com as variáveis
include 'resultTest.php';

$chavea = $_GET['chave'];

$nome_do_computador = str_replace(' ', '', $nome_do_computador);
$ipv4 = str_replace(' ', '', $ipv4);
$mac_address = str_replace(' ', '', $mac_address);
$tag_1 = str_replace(' ', '', $tag_1);
$tag_2 = str_replace(' ', '', $tag_2);
$tag_3 = str_replace(' ', '', $tag_3);
$tag_4 = str_replace(' ', '', $tag_4);
$tag_5 = str_replace(' ', '', $tag_5);
$tag_6 = str_replace(' ', '', $tag_6);
$tag_7 = str_replace(' ', '', $tag_7);
$tag_8 = str_replace(' ', '', $tag_8);
$tag_9 = str_replace(' ', '', $tag_9);
$tag_10 = str_replace(' ', '', $tag_10);
$chave = $chavea;



preg_match('/(\d+\.\d+)/', $tag_5, $matches);
$var1 = $matches[1];
preg_match('/(\d+\.\d+)/', $tag_7, $matches);
$var2 = $matches[1];

try {
    // Query SQL para inserir os valores na tabela
    $sql = "INSERT INTO resultsClients (computer_name, ipv4_address, endmac, tag_1, tag_2, tag_3, tag_4, tag_5, tag_6, tag_7, tag_8, tag_9, tag_10, chave, var1, var2)
            VALUES (:computer_name, :ipv4_address, :endmac, :tag_1, :tag_2, :tag_3, :tag_4, :tag_5, :tag_6, :tag_7, :tag_8, :tag_9, :tag_10, :chave, :var1, :var2)";

    $stmt = $conexao->prepare($sql);

    // Use bindValue em vez de bindParam
    $stmt->bindValue(':computer_name', $nome_do_computador);
    $stmt->bindValue(':ipv4_address', $ipv4);
    $stmt->bindValue(':endmac', $tag_10);
    $stmt->bindValue(':tag_1', $tag_1);
    $stmt->bindValue(':tag_2', $tag_2);
    $stmt->bindValue(':tag_3', $tag_3);
    $stmt->bindValue(':tag_4', $tag_4);
    $stmt->bindValue(':tag_5', $tag_5);
    $stmt->bindValue(':tag_6', $tag_6);
    $stmt->bindValue(':tag_7', $tag_7);
    $stmt->bindValue(':tag_8', $tag_8);
    $stmt->bindValue(':tag_9', $tag_9);
    $stmt->bindValue(':tag_10', $tag_10);
    $stmt->bindValue(':chave', $chave);
    $stmt->bindValue(':var1', $var1);
    $stmt->bindValue(':var2', $var2);

    // Executa a inserção
    $stmt->execute();

header("Location: finalziarProcesso.php");
} catch (PDOException $e) {
    echo "Erro ao inserir no banco de dados: " . $e->getMessage();
}
?>

