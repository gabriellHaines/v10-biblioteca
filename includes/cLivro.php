        <title>
            Cadastro de livro
        </title>

    </head>

    <body>
        <?php

            if (isset($_POST["cadastar"])) {
                require("");
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
                            cadastro de livro
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
                        <input 
                            type = "text" 
                            placeholder = "Digite o nome do autor" 
                            name= "autor"
                        >
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

                        <button name = "cadastar">
                            cadastar livro
                        </button>
                        <button name = "votar">
                            voltar
                        </button>
                    </div>
                </form>
            </div>
