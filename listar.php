<?php
require_once('conexao.php');

$sql = "SELECT ID, titulo, Autor, Genero, Ano_Publicacao, Preco, Sinopse FROM livros2";
$stmt = $conn->prepare($sql);
$stmt->execute();

$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Livros</title>
    <link rel="stylesheet" href="style/listar.css">
    <style>
       
       
    </style>
</head>
<body>
<div class= "tabela">
    <h2>📚 Lista de Livros Cadastrados</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Gênero</th>
                <th>Ano</th>
                <th>Preço (R$)</th>
                <th>Sinopse</th>
            </tr>
        </thead>
 </div>

        <tbody>
            <?php foreach ($livros as $livro): ?>
                <tr>
                    <td><?php echo $livro['ID']; ?></td>
                    <td><?php echo htmlspecialchars($livro['titulo']); ?></td>
                    <td><?php echo htmlspecialchars($livro['Autor']); ?></td>
                    <td><?php echo htmlspecialchars($livro['Genero']); ?></td>
                    <td><?php echo htmlspecialchars($livro['Ano_Publicacao']); ?></td>
                    <td><?php echo number_format($livro['Preco'], 2, ',', '.'); ?></td>
                    <td><?php echo nl2br(htmlspecialchars($livro['Sinopse'])); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<div class ="limite">
    <div class="button" >
    <a href="index.php">← Voltar para o cadastro</a>
    </div>
</div>

</body>
</html>
