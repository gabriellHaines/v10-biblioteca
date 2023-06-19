
<?php



require_once('../app/conexao.php');
$veiculoUsuario = "SELECT liv_id, liv_codigo ,liv_nome ,aut_nome ,liv_edicao ,liv_editora ,liv_ano ,liv_numPagina
FROM livro
WHERE liv_status = 'ativo' 
";
$resultado = mysqli_query($con,$veiculoUsuario);

while ($informacao = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $informacao["liv_codigo"] . "</td>";
    echo "<td>" . $informacao["liv_nome"] . "</td>";
    echo "<td>" . $informacao["aut_nome"] . "</td>";
    echo "<td>" . $informacao["liv_edicao"] . "</td>";
    echo "<td>" . $informacao["liv_editora"] . "</td>";
    echo "<td>" . $informacao["liv_ano"] . "</td>";
    echo "<td>" . $informacao["liv_numPagina"] . "</td>";
    echo "<td><a href='./lAltera.php?lAltera=" . $informacao['liv_id'] . "'><button>Alterar</button></a></td>";
    echo "<td><form method='post'><input type='hidden' name='lF' value='" . $informacao['liv_id'] . "'><button type='submit' name='excluir'>Excluir</button></form></td>";
    echo "</tr>";
}
if (isset($_POST['excluir'])) {
    $liv_id = $_POST['lF'];
    require_once('../app/conexao.php');
    $altera = "UPDATE livro 
    SET liv_status = 'desativado'
    WHERE liv_id = '$liv_id'
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