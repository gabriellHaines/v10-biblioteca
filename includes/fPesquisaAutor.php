<title>
        Busca de Autor    
    </title>

</head>

<body>
<?php

    
    if (isset($_POST["voltar"])) {
        header("location:./iFuncionario.php");
    }
?>
<div class="full">
    <div>
        <form method="post">
            <div class="form">
                <label>
                    busca de autor
                </label>
                <input 
                    type = "text" 
                    placeholder = "buscar pelo nome do autor" 
                    name= "autor"
                >
                <input 
                    type = "text" 
                    placeholder = "buscar pela nascionalidade" 
                    name= "nascionalidade"
                >
                <button name =  "pesquisar">
                    pesquisar
                </button>
                <button name = "voltar">
                    voltar
                </button>
            </div>
        </form>
        <div>
            <table >
                <tr>
                    <th>codigo</th>
                    <th>nome</th>
                    <th>nome autor</th>
                    <th>edicao</th>
                    <th>editora</th>
                    <th>ano</th>
                    <th>numPagina</th>
                    <th>Alterar</th>
                    <th>Excluir</th>

                </tr>
                <?php
                    
                    if (isset($_POST["pesquisar"])) {
                        require("../app/aPesquisa.php");
                    }else{
                        require_once('../app/aPesquisa.php');   
                    }
                    
                ?>
            </table>
        </div>
        
    </div>
