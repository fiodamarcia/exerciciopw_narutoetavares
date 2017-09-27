<?php
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <h1>Sistema de Cadastro</h1>
        <h2>Cadastro de Produto</h2>
        <form action="add.php" method="post">
            <label for="name">Nome: </label>
            <br>
            <input type="text" name="name" id="name">
            <br><br>
            <label for="color">Cor: </label>
            <br>
            <input type="text" name="color" id="color">
            <br><br>
            <label for="price">Preço: </label>
            <br>
            <input type="number" name="price" id="price">
            <br><br>
            <label for="startdate">Data de Entrada: </label>
            <br>
            <input type="date" name="startdate" id="startdate" placeholder="dd/mm/YYYY">
            <br><br>
            <label for="quantity">Quantidade: </label>
            <br>
            <input type="number" name="quantity" id="quantity">
            <br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>