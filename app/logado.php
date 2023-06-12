<?php

    session_start();
    $id = $_SESSION["id"];
    $nome = $_SESSION["nome"];
    $tipo = $_SESSION["tipo"];

    if (empty($id)) {
        header('location:../index.php');
    }

?>