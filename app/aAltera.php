<?php
    $id = $_GET["lAltera"];
    $nome =$_POST["nome"];
    $data_nascimento =$_POST["data_nascimento"];
    $nascionalidade =$_POST["nascionalidade"];
    $descricao =$_POST["descricao"];
    $foto =$_POST["foto"];

    require_once("../app/conexao.php");


    if ($nome != "") {
        $altera = "UPDATE autor
        SET aut_nome = '$nome'
        WHERE aut_id = '$id'
        ";
        mysqli_query($con,$altera);
    }
    if ($data_nascimento != "") {
        $altera = "UPDATE autor
        SET aut_data_nascimento = '$data_nascimento'
        WHERE aut_id = '$id'
        ";
        mysqli_query($con,$altera);
    }
    if ($nascionalidade != "") {
        $altera = "UPDATE autor
        SET aut_nascionalidade = '$nascionalidade'
        WHERE aut_id = '$id'
        ";
        mysqli_query($con,$altera);
    }
    if ($descricao != "") {
        $altera = "UPDATE autor
        SET aut_descricao = '$descricao'
        WHERE aut_id = '$id'
        ";
        mysqli_query($con,$altera);
    }
    if ($foto != "") {
        $altera = "UPDATE autor
        SET aut_foto = '$foto'
        WHERE aut_id = '$id'
        ";
        mysqli_query($con,$altera);
    }
    mysqli_close($con);
?>