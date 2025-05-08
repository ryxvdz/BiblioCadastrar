<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
       

    </style>
</head>
<body>

    <div class="titulo"><h1>Cadastro de Livros</h1>
    <h4>Ryan Victor/Luan Prates</h4></div>

    <form id="form-livro" action="cadastrar.php" method="POST">
<div class = "barras">
        <label>Título:</label>
        <input type="text" name="titulo" required><br><br>

        <label>Autor:</label>
        <input type="text" name="autor" required><br><br>

        <label>Gênero:</label>
        <input type="text" name="genero" required><br><br>

        <label>Ano de Publicação:</label>
        <input type="text" name="Ano_Publicacao" required><br><br>

        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" required><br><br>
    
        <label>Sinopse:</label>
        <input name="sinopse" id= "sinopse" required></input><br><br>
        

        <div class="button">
            <a href="#" onclick="document.getElementById('form-livro').submit();">CADASTRAR</a>
        </div>

        </div>

    </form>

</body>
</html>