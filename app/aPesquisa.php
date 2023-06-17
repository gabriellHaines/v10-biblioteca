
<?php
    $autor=$_POST["autor"];
    $nascionalidade=$_POST["nascionalidade"];
    if(!empty($autor)){
        $nAutor = " && aut_nome LIKE '%$autor%'";    
    }else{
        $nAutor = "";
    }
    if(!empty($nascionalidade)){
        $aNascionalidade = " && aut_nascionalidade LIKE '%$nascionalidade%'" ;  
    }else{
        $aNascionalidade= '';
    }
    require_once('../app/conexao.php');
    $buscaAutor = "SELECT aut_id ,aut_nome ,aut_data_nacimento ,aut_nascionalidade ,aut_descricao ,aut_foto
    FROM autor
    WHERE aut_status = 'ativo' $aNascionalidade $nAutor
    ";
    $resultado = mysqli_query($con,$buscaAutor);
    if (mysqli_num_rows($resultado) == 0) {
        echo "Nenhum livro encontrado.";
    } else {
        while ($informacao = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $informacao["aut_nome"] . "</td>";
            echo "<td>" . $informacao["aut_data_nacimento"] . "</td>";
            echo "<td>" . $informacao["aut_nascionalidade"] . "</td>";
            echo "<td>" . $informacao["aut_descricao"] . "</td>";
            echo "<td>" . $informacao["aut_foto"] . "</td>";
            echo "<td><a href='./lAltera.php?lAltera=" . $informacao['aut_id'] . "'><button>Alterar</button></a></td>";
            echo "<td><form method='post'><input type='hidden' name='lF' value='" . $informacao['aut_id'] . "'><button type='submit' name='excluir'>Excluir</button></form></td>";
            echo "</tr>";
        }
    } 
    if (isset($_POST['excluir'])) {
        $aut_id = $_POST['lF'];
        require_once('../app/conexao.php');
        $altera = "UPDATE livro 
        SET aut_status = 'desativado'
        WHERE aut_id = '$aut_id'
        ";
        $retorno = mysqli_query($con,$altera);   
        if ($retorno) {
            echo "Livro excluído com sucesso.";
        } else {
            echo "Erro ao excluir Livro.";
        }
    
    }
    mysqli_close($con);    
?> 