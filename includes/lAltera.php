        <title>
           Alterar Livro
        </title>
        <link rel="stylesheet" href="../css/login.css">
    </head>

    <body>
        <?php

            if (isset($_POST["alterar"])) {
                require("../app/lAltara.php");
            }
            if (isset($_POST["votar"])) {
                header("location:./iFuncionario.php");
            }
        ?>
        <div class="full">
            <div>
                <form method="post">
                    <div class="form">
                        <label>
                            Alterar livro de livro
                        </label>
                        <input 
                            type = "text" 
                            placeholder = "Digite o código da obra" 
                            name= "codigo"
                        >
                        <input 
                            type = "text" 
                            placeholder = "Digite onome da obra" 
                            name= "nome"
                        >
                        <div>
                            <label>Nome do Autor</label>
                            <?php
                                require_once("../app/sAutor.php");
                            ?>
                        </div>
                        <input 
                            type = "text" 
                            placeholder = "Digite a edição" 
                            name= "edicao"
                        >
                        <input 
                            type = "text" 
                            placeholder = "Digite a editora" 
                            name= "editora"
                        >
                        <input 
                            type = "text" 
                            placeholder = "Digite o ano de publicação" 
                            name= "ano"
                        >
                        <input 
                            type = "text" 
                            placeholder = "Digite onúmero de páginas" 
                            name= "paginas"
                        >

                        <button name = "alterar">
                            Alterar Livro
                        </button>
                        <button name = "votar">
                            voltar
                        </button>
                    </div>
                </form>
            </div>
