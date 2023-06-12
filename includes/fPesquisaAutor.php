<title>
        Busca de Autor    
    </title>

</head>

<body>
<?php

    if (isset($_POST["pesquisar"])) {
        require("");
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
                    busca de autor
                </label>
                <input 
                    type = "text" 
                    placeholder = "buscar pelo nome do autor" 
                    name= "autor"
                >
                <input 
                    type = "text" 
                    placeholder = "buscar pela nascionalidade" 
                    name= "autor"
                >
                <input 
                    type = "text" 
                    placeholder = "buscar data de nascimento" 
                    name= "data_nascimento"
                >
                <button name =  "pesquisar">
                    pesquisar
                </button>
                <button name = "voltar">
                    voltar
                </button>
            </div>
        </form>
    </div>
