        <title>
            Funcionarios
        </title>

    </head>

    <body>
    <?php

        if (isset($_POST[""])) {
            require("");
        }
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
        <div>
            <form method="post">
                <div class="form">
                    <label>
                      Página dos Funcionarios  
                    </label>
                    <button name = "lPesquisa">
                        pesquisar por livros
                    </button>
                    <button name = "cLivro">
                        cadastar livros
                    </button>
                    <button name = "aPesquisa">
                        pesquisar por autores
                    </button>
                    <button name = "cAutor">
                        cadastar autor
                    </button>
                    <button name = "sair">
                        sair
                    </button>
                </div>
            </form>
        </div>
