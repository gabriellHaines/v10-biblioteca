<?php
    $id = $_GET["lAltera"];
    $codigo = $_POST["codigo"];
    $nome =$_POST["nome"];
    $autor =$_POST["autor"];
    $edicao =$_POST["edicao"];
    $editora =$_POST["editora"];
    $ano =$_POST["ano"];
    $paginas =$_POST["paginas"];

    require_once("../app/conexao.php");
    if ($codigo != "") {
        $altera = "UPDATE livro
        SET liv_codigo = '$codigo'
        WHERE liv_id = '$liv_id'
        ";
        mysqli_query($con,$altera);
    }
    if ($nome != "") {
        $altera = "UPDATE livro
        SET liv_nome = '$nome'
        WHERE liv_id = '$liv_id'
        ";
        mysqli_query($con,$altera);
    }
    if ($autor != "") {
        $altera = "UPDATE livro
        SET aut_nome = '$autor'
        WHERE liv_id = '$liv_id'
        ";
        mysqli_query($con,$altera);
    }
    if ($edicao != "") {
        $altera = "UPDATE livro
        SET liv_edicao = '$edicao'
        WHERE liv_id = '$liv_id'
        ";
        mysqli_query($con,$altera);
    }
    if ($editora != "") {
        $altera = "UPDATE livro
        SET liv_editora = '$editora'
        WHERE liv_id = '$liv_id'
        ";
        mysqli_query($con,$altera);
    }
    if ($ano != "") {
        $altera = "UPDATE livro
        SET liv_ano = '$ano'
        WHERE liv_id = '$liv_id'
        ";
        mysqli_query($con,$altera);
    }
    if ($paginas != "") {
        $altera = "UPDATE livro
        SET liv_paginas = '$paginas'
        WHERE liv_id = '$liv_id'
        ";
        mysqli_query($con,$altera);
    }
    mysqli_close($con);
?>