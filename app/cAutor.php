<?php
    require_once("../app/conexao.php");
    
    $nome = $_POST["nome"];

    $sTable = " SELECT aut_nome FROM autor WHERE aut_nome = '$nome'";

    $sRetorno = mysqli_query($con,$sTable);

    if ($sRetorno) {
        if (mysqli_num_rows($sRetorno) == 0 ) {
            $data_nascimeto = $_POST["data_nascimento"];
            $nascionalidade = $_POST["nascionalidade"];
            $descricao = $_POST["descricao"];
            $foto = $_POST["foto"];
            
            $iTable = "INSERT INTO autor(aut_nome,aut_data_nascimento,aut_nacionalidade,aut_descricao,aut_foto)
            VALUES('$nome','$data_nascimeto','$nascionalidade','$descricao','$foto')";
            $iRetorno = mysqli_query($con,$iTable);
            if($iRetorno){
                echo "autor cadastado com susceso";
            }else{
                echo 'ERRO INSERT: '. mysqli_error($con);  
            }
        }else{
            echo "autor ja cadastrado";
        }
    }else{
        echo 'ERRO SELECT: '. mysqli_error($con);
    }
    mysqli_close($con);
?>