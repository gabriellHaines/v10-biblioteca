<?php
    $usuario = $_POST["usuario"];    
    require_once("../app/conexao.php");
    $sTable = "SELECT usu_usuario FROM usuario WHERE usu_usuario = '$usuario'";
    $sRetorno = mysqli_query($con,$sTable);
    if ($sRetorno) {
        if (mysqli_num_rows($sRetorno) == 0) {
            
            $senha = $_POST["senha"];
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $data_nascimento = $_POST["data_nascimento"];
            $iTable = "INSERT INTO usuario(usu_usuario ,usu_senha ,usu_nome ,usu_cpf ,usu_endereco ,usu_telefone ,usu_data_nascimento)
            VALUES('$usuario','$senha','$nome','$cpf','$endereco','$telefone','$data_nascimento')";
            if (mysqli_query($con,$iTable)) {
                echo "cadastro realizado com sucesso";
            } else {
                echo 'ERRO INSERT: ' . mysqli_error($con);
            } 
            mysqli_close($con);
            header("location:../index.php");  
        }else{
            echo "usuario já cadastrado, tente outro";
        }            
    }else{
        echo 'ERRO SELECT: '. mysqli_error($con);
    }
    mysqli_close($con);
?>