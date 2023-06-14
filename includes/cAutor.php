    <title>
        cadastro de autores
    </title>

</head>

<body>
    <?php

        if (isset($_POST["cadastrar"])) {
            require("../app/cAutor.php");
        }
        if (isset($_POST["voltar"])) {
            header("location:./iFuncionario.php");
        }
    ?>
    <div class="full">
        <div>
            <form method="post">
                <div class="form">
                    <label>
                        Cadastro de autores
                    </label>
                    <input 
                        type = "text" 
                        placeholder = "Digite o nome do autor" 
                        name= "nome"
                    >
                    <input 
                        type = "text" 
                        placeholder = "Digite a data de nascimento do autor" 
                        name= "data_nascimento"
                    >
                    <input 
                        type = "text" 
                        placeholder = "Digite a nascionalidade do autor" 
                        name= "nascionalidade"
                    >
                    <input 
                        type = "text" 
                        placeholder = "Digite a descricao" 
                        name= "descricao"
                    >
                    <input 
                        type = "text" 
                        placeholder = "Digite o link da foto do autor" 
                        name= "foto"
                    >
                    <button name = "cadastrar">
                        cadastar
                    </button>
                    <button name = "voltar">
                        voltar
                    </button>
                </div>
            </form>
        </div>