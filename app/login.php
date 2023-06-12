<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"]; 
    require_once("./app/conexao.php");
    $sTable = "SELECT usu_usuario, usu_senha , usu_id, usu_nome  , usu_tipo , usu_status
    FROM usuario
    WHERE usu_usuario =  '$usuario'";
    $sRetorno = mysqli_query($con,$sTable);
    mysqli_close($con);
    if (mysqli_num_rows($sRetorno) == 1 ) {
        $rDados =  mysqli_fetch_assoc($sRetorno);
        if ($rDados["usu_status"] == "ativo") {
        $senhaB = $rDados["usu_senha"];
            if ($senhaB == $senha) {
                session_start();            
                $_SESSION["id"] = $rDados["usu_id"];
                $_SESSION["nome"] = $rDados["usu_nome"];
                $_SESSION["tipo"] = $rDados["usu_tipo"];     
                if ($rDados["usu_tipo"] == "usuario" ) {
                    header('location:./pages/iCliente.php');
                }else {
                    header('location:./pages/iFuncionario.php');
                }       
            }else{
            echo "senha incorreta";
            }
        }else{
            echo "usuário desativado";
        }
    }else{
        echo "usuário invalido";
    } 
?>