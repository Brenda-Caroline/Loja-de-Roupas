<?php

    $conexao=mysql_connect ("localhost", "root", "usbw") or die ("Conexao nao efetuada");
    mysql_select_db ("lojaRoupas");

    $result_funcionarios = "SELECT * FROM funcionarios";
    $resultado_funcionarios = mysql_query( $result_funcionarios, $conexao) or die(mysql_error());

?>

<html>
	<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="meucss/listar.css">
        <link href = "https://fonts.googleapis.com/css2? family = EB + Garamond & family = Ibarra + Real + Nova & family = PT + Serif & display = swap "rel =" stylesheet ">
        <title>Minha página</title>

        
    </head>
    <body>
        <nav>
            <ul>
            <li><a href="index.html">Home</a></li>
                <li><a href="cadastroProdutos.html">Cadastrar Produtos</a></li>
                <li><a href="produtos.php"> Produtos </a></li>
                <li><a href="funcionarios.php"> Funcionários </a></li>
                <li><a href="clientes.php"> Clientes</a></li>

            </ul>  
          </nav>  
</head>
<body>
<div >
    <?php
        while($row_funcionario= mysql_fetch_assoc($resultado_funcionarios)){
    ?>  

            <b>ID:</b> <?=$row_funcionario['id']?><br>
            <b>Nome: </b><?=$row_funcionario['nome']?><br>
            <b>Sexo: </b><?=$row_funcionario['sexo']?><br>
            <b>Telefone: </b><?=$row_funcionario['telefone']?><br>
            <b>Endereco:</b> <?=$row_funcionario['endereco']?><br>
            
            
			<?php
            
            echo "<br><a id='botao' href='pagEditarFuncionario.php?id=" . $row_funcionario['id'] . "' >Editar</a>";
            echo "<a id='botao' href='apagarFuncionario.php?id=" . $row_funcionario['id'] . "' >Apagar</a><br>";
            ?>
            <br>
            
            
        
        <hr>
       
        
        
<?php } ?>

<button onclick=window.location.href="cadastroFuncionario.html">Cadastrar funcionários</button>
        </div>
</body>
</html>