
        <title>Login</title>
        <link rel="stylesheet" href="./css/login.css">
    </head>
    
    <body>
        <?php
        
            if (isset($_POST["entrar"])) {
                require_once("./app/login.php");
            }
            if (isset($_POST["cadastrar"])) {
                header("location:./pages/cUsuario.php");
            }
        ?>
        <div class="full">
            <div>
                <form method="post">
                    <div class="form">
                        <label class="label">Entrar na Biblioteca Online</label>
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
                        <button 
                            name = "entrar"
                            class="button"    
                        >
                            Entrar
                        </button>
                        <button 
                            name = "cadastrar"
                            class="buttonCadastrar"
                        >
                            Criar nova conta
                        </button>
                    </div>
                </form>
            </div>

        


