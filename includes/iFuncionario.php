        <title>
            Funcionarios
        </title>
        <link rel="stylesheet" href="../css/iFuncionario.css">
    </head>

    <body>
    <?php
        
        if (isset($_POST["sair"])) {
            require_once("../app/bSair.php");
        }
        if (isset($_POST["lPesquisa"])) {
            header("location:./fPesquisaLivro.php");
        }
        if (isset($_POST["cLivro"])) {
            header("location:./cLivro.php");
        }
        if (isset($_POST["aPesquisa"])) {
            header("location:./fPesquisaAutor.php");
        }
        if (isset($_POST["cAutor"])) {
            header("location:./cAutor.php");
        }
        
    ?>
    <div class="full">
        <nav class="nav">
            <div class="div" >
                <div >
                    <?php
                        require_once("../app/logado.php");
                        if ($tipo != 'funcionario') {
                            require_once("../app/bSair.php");
                        }
                    ?>
                </div>
                <div class="div">
                    <form method="post">
                        <label class='label'>
                            Página dos Funcionarios
                        </label>
                        <button name = "lPesquisa" class="button">
                            pesquisar por livros
                        </button>
                        <button name = "cLivro" class="button">
                            cadastar livros
                        </button>
                        <button name = "aPesquisa" class="button">
                            pesquisar por autores
                        </button>
                        <button name = "cAutor" class="button">
                            cadastar autor
                        </button>
                        <button name = "sair" class="button">
                            sair
                        </button>
                    </form>
                </div>
            </div>
        </nav>
