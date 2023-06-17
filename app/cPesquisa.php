<?php
    $nome=$_POST["livro"];
    $autor=$_POST["autor"];
    $editora=$_POST["editora"];
    if(!empty($nome)){
        $nlivro = " && liv_nome LIKE '%$nome%'";    
    }else{
        $nlivro = "";
    }
    if(!empty($autor)){
        $lAutor = " && aut_nome LIKE '%$autor%'" ;  
    }else{
        $lAutor= '';
    }
    if(!empty($editora)){
        $lEditora =" && liv_editora LIKE '%$editora%'";  
    }else{
        $lEditora = "";
    }
    require_once('../app/conexao.php');
    $veiculoUsuario = "SELECT liv_codigo ,liv_nome ,aut_nome ,liv_edicao ,liv_editora ,liv_ano ,liv_numPagina
    FROM livro
    WHERE liv_status = 'ativo' $nlivro $lAutor $lEditora
    ";
    $resultado = mysqli_query($con,$veiculoUsuario);
    if (mysqli_num_rows($resultado) == 0) {
        echo "Nenhum livro encontrado.";
    } else {
        while ($informacao = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $informacao["liv_codigo"] . "</td>";
            echo "<td>" . $informacao["liv_nome"] . "</td>";
            echo "<td>" . $informacao["aut_nome"] . "</td>";
            echo "<td>" . $informacao["liv_edicao"] . "</td>";
            echo "<td>" . $informacao["liv_editora"] . "</td>";
            echo "<td>" . $informacao["liv_ano"] . "</td>";
            echo "<td>" . $informacao["liv_numPagina"] . "</td>";
        }
    } 

    mysqli_close($con);    
?>  