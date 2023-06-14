<?php
    $codigo = $_POST["codigo"];
    $sTable = "SELECT liv_codigo FROM livro WHERE liv_codigo = '$codigo'";
    require_once("../app/conexao.php");
    $sRetorno = mysqli_query($con,$sTable);
    if ($sRetorno) {
        if (mysqli_num_rows($sRetorno) == 0) {
            $nome = $_POST["nome"];
            $autor = $_POST["autor"];
            $edicao = $_POST["edicao"];
            $editora = $_POST["editora"];
            $ano = $_POST["ano"];
            $paginas = $_POST["paginas"];
            $iTable = "INSERT INTO livro(liv_codigo ,liv_nome ,aut_nome ,liv_edicao ,liv_editora ,liv_ano ,liv_numPagina) VALUES ('$codigo', '$nome','$autor','$edicao','$editora','$ano','$paginas' )";
            $iRetorno = mysqli_query($con,$iTable);
            if ($iRetorno) {
                echo"livro cadastrado";
            }else{
                echo"ERRO NO INSERT". mysqli_error($con);
            }
        }else{
            echo "CODIGO DE LIVRO JÁ CADASTRADO";
        }
    }else{
        echo "ERRO NO SELECT ". mysqli_error($con);
    }

?>