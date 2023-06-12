        <title>Login</title>
        <link rel="stylesheet" href="./css/cUsuario.css">
    </head>
    
    <body>
        <?php
        
            if (isset($_POST["cadastrar"])) {
                require("");
            }
            if (isset($_POST["login"])) {
                header("location:../index.php");
            }
        ?>
        <div class="full">
            <div>
                <form method="post">
                    <div class="form">
                        <label>Criar Cadastro da Biblioteca Online</label>
                        <input 
                            type = "text" 
                            placeholder = "Digite seu usuário" 
                            name= "usuario"
                        >
                        <input 
                            type="password"
                            placeholder="Digite sua senha"
                            name = "senha"
                        >
                        <input 
                            type="text"
                            placeholder="Digite seu nome"
                            name = "nome"
                        >
                        <input 
                            type="text"
                            placeholder="Digite seu CPF"
                            name = "cpf"
                        >
                        <input 
                            type="text"
                            placeholder="Digite endereço"
                            name = "endereco"
                        >
                        <input 
                            type="text"
                            placeholder="Digite seu telefone"
                            name = "telefone"
                        >
                        <input 
                            type = "text" 
                            placeholder = "Digite a sua data de nascimento" 
                            name= "data_nascimento"
                        >
                        <button name = "cadastrar">
                            Cadastrar
                        </button>
                        <button name = "login">
                            Já tenho uma conta
                        </button>
                    </div>
                </form>
            </div>


