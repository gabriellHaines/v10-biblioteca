    <title> 
        Busca de Livro    
    </title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
<?php

    if (isset($_POST["pesquisar"])) {
        require("");
    }
    if (isset($_POST["voltar"])) {
        header("location:./iCliente.php");
    }
    if (isset($_POST["sair"])) {
        require("../app/bSair.php");
    }
?>
<div class="full">
    <div>
        <form method="post">
            <div class="form">
                <label>
                    busca de livro
                </label>
                <input 
                    type = "text" 
                    placeholder = "buscar pelo nome do livro" 
                    name= "livro"
                >
                <input 
                    type = "text" 
                    placeholder = "buscar pelo nome do autor" 
                    name= "autor"
                >
                <input 
                    type = "text" 
                    placeholder = "buscar pela editora" 
                    name= "editora"
                >
                <button name =  "pesquisar">
                    pesquisar
                </button>
                <button name = "voltar">
                    voltar
                </button>
                <button name = "sair">
                    sair
                </button>
            </div>
        </form>
    </div>
