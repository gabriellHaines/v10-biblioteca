
<?php
    require_once("../app/conexao.php"); 

    $dTable = "DROP TABLE autor";
    if (mysqli_query($con,$dTable)) {
        echo "Tabela excluida com susceso";
    }else{
        echo 'ERRO: '. mysqli_error($con);
    }
    $cTable = "CREATE TABLE autor (
        aut_id INT PRIMARY KEY AUTO_INCREMENT,
        aut_nome VARCHAR(50),
        aut_data_nascimento VARCHAR(20),
        aut_nacionalidade VARCHAR(100),
        aut_descricao VARCHAR(20),
        aut_foto VARCHAR(10),
        aut_status ENUM('ativo', 'desativado') NOT NULL DEFAULT 'ativo'        
    )";
    if (mysqli_query($con,$cTable)) {
        echo "Tabela criada com susceso";
    }else{
        echo 'ERRO: '. mysqli_error($con);
    }
    mysqli_close($con);

?>