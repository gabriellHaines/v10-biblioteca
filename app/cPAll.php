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
    echo "</tr>";
}
mysqli_close($con);    
?> 