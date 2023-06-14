<?php
  
    require_once("../app/conexao.php");

    $sTable = "SELECT aut_nome FROM autor";
    $sRetorno = mysqli_query($con, $sTable);
    echo '<select name="autor">';
    while ($linha = mysqli_fetch_assoc($sRetorno)) {
        echo '<option value="' . $linha['aut_nome'] . '">' . $linha['aut_nome'] . '</option>';
    }
    echo '</select>';

?>