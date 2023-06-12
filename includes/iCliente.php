        <title>
            Cliente
        </title>
        <link rel="stylesheet" href="../css/login.css">
    </head>

    <body>
        <?php
            
            require_once("../app/logado.php");

            if (isset($_POST["sair"])) {
                require("../app/bSair.php");
            }
            if (isset($_POST["pesqusiarLivro"])) {
                header("location:./cPesquisa.php");
            }
        ?>
        <div class="full">
            <div>
                <form method="post">
                    <div class="form">
                        <label>

                        </label>
                        <button name = "pesqusiarLivro">
                            pesquisar por livro
                        </button>
                        <button name = "sair">
                            sair
                        </button>
                    </div>
                </form>
            </div>
