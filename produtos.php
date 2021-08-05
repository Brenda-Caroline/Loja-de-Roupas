<?php

    $conexao=mysql_connect ("localhost", "root", "usbw") or die ("Conexao nao efetuada");
    mysql_select_db ("lojaRoupas");

    $result_produtos = "SELECT * FROM produtos";
    $resultado_produtos = mysql_query( $result_produtos, $conexao) or die(mysql_error());

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
        while($row_produto= mysql_fetch_assoc($resultado_produtos)){
    ?>  

            <b>ID:</b> <?=$row_produto['id']?><br>
            <b>Nome: </b><?=$row_produto['nome']?><br>
            <b>Marca: </b><?=$row_produto['marca']?><br>
            <b>Modelo: </b><?=$row_produto['modelo']?><br>
            <b>Categoria:</b> <?=$row_produto['categoria']?><br>
            <b>Quantidade: </b><?=$row_produto['quantidade']?><br>
            <b>Tamanho: </b><?=$row_produto['tamanho']?><br>
            <b>Cor:</b> <?=$row_produto['cor']?><br>
            <b>Preco:</b> <?=$row_produto['preco']?><br>

            
            
			<?php
            
            echo "<br><a id='botao' href='pagEditarProduto.php?id=" . $row_produto['id'] . "' >Editar</a>";
            echo "<a id='botao' href='apagarProduto.php?id=" . $row_produto['id'] . "' >Apagar</a><br>";
            ?>
            <br>
            
            
        
        <hr>
       
        
        
<?php } ?>


        </div>
</body>
</html>