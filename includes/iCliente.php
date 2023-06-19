        <title>
            Cliente
        </title>
        <link rel="stylesheet" href="../css/iCliente.css">
    </head>

    <body>
        <div class="full">
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
                        <div class="form">
                            <button 
                                name = "pesqusiarLivro"
                                class="button"
                            >
                                pesquisar por livro
                            </button>
                            <button 
                                name = "sair"
                                class="button"    
                            >
                                sair
                            </button>
                        </div>
                    </form>
                </div>
            </nav>
