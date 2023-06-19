    <title> 
        Busca de Livro    
    </title>
    <link rel="stylesheet" href="../css/cPesquisa.css">
</head>

<body>
<?php
    
    
    if (isset($_POST["voltar"])) {
        header("location:./iCliente.php");
    }
    if (isset($_POST["sair"])) {
        require("../app/bSair.php");
    }
?>
<div class="full">
    <div>
        <nav class="nav">
            <div class="div">
                <?php
            
                    require_once("../app/logado.php");
                    if (isset($_POST["sair"])) {
                        require("../app/bSair.php");
                    }
                    if (isset($_POST["pesqusiarLivro"])) {
                        header("location:./cPesquisa.php");
                    }
                ?>
            </div>
            <div class="div">
                <form method="post" class="form">
                    <button
                        name = "voltar"
                        class="button"
                    >
                        voltar
                    </button>
                    <button
                        name = "sair"
                        class="button"
                    >
                        sair
                    </button>
                </form>
            </div>
        </nav>
    </div>
    
    <div class="container">
        <div class="sidebar">
            <form method="post" class="form">
                <div class="formGrup">
                    <label class="label">
                        busca de livro
                    </label>
                    <input
                        type = "text"
                        placeholder = "buscar pelo nome do livro"
                        name= "livro"
                        class="input"
                    >
                    <input
                        type = "text"
                        placeholder = "buscar pelo autor(nome)"
                        name= "autor"
                        class="input"
                    >
                    <input
                        type = "text"
                        placeholder = "buscar pela editora"
                        name= "editora"
                        class="input"
                    >
            
                    <button 
                        name =  "pesquisar"
                        class="button"
                    >
                        pesquisar
                    </button>
                </div>
            </form>
        </div>
        <div class="content">
            <table class="table">
                <tr class="tr">
                    <th class="th">codigo</th>
                    <th class="th">nome</th>
                    <th class="th">nome autor</th>
                    <th class="th">edicao</th>
                    <th class="th">editora</th>
                    <th class="th">ano</th>
                    <th class="th">numPagina</th>

                </tr>
                <?php
                    
                    if (isset($_POST["pesquisar"])) {
                        require("../app/cPesquisa.php");
                    }else{
                        require("../app/cPAll.php");   
                    }
                    
                ?>
            </table>
        </div>
        
    </div>
