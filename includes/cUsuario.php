        <title>Login</title>
        <link rel="stylesheet" href="../css/cadastroUsuario.css">
    </head>
    
    <body>
        <?php
        
            if (isset($_POST["cadastrar"])) {
                require("../app/cUsuario.php");
            }
            if (isset($_POST["login"])) {
                header("location:../index.php");
            }
        ?>
        <div class="full">
            <div>
                <form method="post">
                    <div class="form">
                        <label class="label"  >
                            Criar Cadastro da Biblioteca Online
                        </label>
                        <input 
                            type = "text" 
                            placeholder = "Digite seu usuário" 
                            name= "usuario"
                            class="input"  
                        >
                        <input 
                            type="password"
                            placeholder="Digite sua senha"
                            name = "senha"
                            class="input"  
                        >
                        <input 
                            type="text"
                            placeholder="Digite seu nome"
                            name = "nome"
                            class="input"  
                        >
                        <input 
                            type="text"
                            placeholder="Digite seu CPF"
                            name = "cpf"
                            class="input"  
                        >
                        <input 
                            type="text"
                            placeholder="Digite endereço"
                            name = "endereco"
                            class="input"  
                        >
                        <input 
                            type="text"
                            placeholder="Digite seu telefone"
                            name = "telefone"
                            class="input"  
                        >
                        <input 
                            type = "text" 
                            placeholder = "Digite a sua data de nascimento" 
                            name= "data_nascimento"
                            class="input"  
                        >
                        <button 
                            name = "cadastrar"
                            class="buttonCadastrar"  
                        >
                            Cadastrar
                        </button>
                        <button 
                            name = "login"
                            class="button"    
                        >
                            Já tenho uma conta
                        </button>
                    </div>
                </form>
            </div>


