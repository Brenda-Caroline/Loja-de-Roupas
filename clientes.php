<?php

    $conexao=mysql_connect ("localhost", "root", "usbw") or die ("Conexao nao efetuada");
    mysql_select_db ("lojaRoupas");

    $result_clientes = "SELECT * FROM clientes";
    $resultado_clientes = mysql_query( $result_clientes, $conexao) or die(mysql_error());

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
        while($row_cliente= mysql_fetch_assoc($resultado_clientes)){
    ?>  

            <b>ID:</b> <?=$row_cliente['id']?><br>
            <b>Nome: </b><?=$row_cliente['nome']?><br>
            <b>Sexo: </b><?=$row_cliente['sexo']?><br>
            <b>Telefone: </b><?=$row_cliente['telefone']?><br>
            <b>Endereco:</b> <?=$row_cliente['endereco']?><br>
            
            
			<?php
            
            echo "<br><a id='botao' href='pagEditarCliente.php?id=" . $row_cliente['id'] . "' >Editar</a>";
            echo "<a id='botao' href='apagarCliente.php?id=" . $row_cliente['id'] . "' >Apagar</a><br>";
            ?>
            <br>
        
        <hr>
       
<?php } ?>

<button onclick=window.location.href="cadastroClientes.html">Cadastrar Clientes</button>
        </div>
</body>
</html>