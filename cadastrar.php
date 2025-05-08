<?php
require_once('conexao.php');

// Recebe os dados do formulário
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$Ano_Publicacao = $_POST['Ano_Publicacao'];
$preco = $_POST['preco'];
$sinopse = $_POST['sinopse'];

echo "<link rel='stylesheet' type='text/css' href='style/cadastrar.css'>"; 

try {
    $sql = "INSERT INTO livros2 (titulo, Autor, Genero, Ano_Publicacao, Preco, Sinopse) 
            VALUES (:titulo, :autor, :genero, :ano, :preco, :sinopse)";
    
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $Ano_Publicacao);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':sinopse', $sinopse);

    if ($stmt->execute()) {
        echo "<h2 class='success'>✅ Livro cadastrado com sucesso!</h2>";
    } else {
        echo "<h2 class='error'>❌ Erro ao cadastrar livro.</h2>";
    }

    echo "<a class='button' href='./index.php'>Voltar para o formulário</a><br>";
    echo "<a class='button' href='listar.php'>Ver lista de livros</a>";

} catch (PDOException $e) {
    echo "<h2 class='error'>Erro ao executar a query: " . $e->getMessage() . "</h2>";
}
?>