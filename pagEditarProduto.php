
<?php
$conexao=mysql_connect ("localhost", "root", "usbw") or die ("Conexao nao efetuada");
mysql_select_db ("lojaRoupas");
$Id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_produtos = "SELECT * FROM produtos where id='$Id'";
$resultado_produtos = mysql_query( $result_produtos,  $conexao);
$row_produto= mysql_fetch_assoc($resultado_produtos);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="meucss/styles.css">
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
        <div>
        <h1> Editar Produtos </h1>  
        
        <form method="POST" action="editarProduto.php"> 
            <table>
                <input type="hidden" name="Id" value="<?php echo $row_produto['id'] ;?>"/>
                <tr>
                    <th>Nome:</th>
                    <td><input type="text" name="nome" id="nome" placeholder="Digite o nome do produto" value=" <?php echo $row_produto['nome'];?>"/></td>
                </tr>
                <tr>
                    <th>Marca:</th>
                    <td><input type="text" name="marca" id="marca" placeholder="Digite a marca do produto" value=" <?php echo $row_produto['marca'];?>"/></td>
                </tr>
                <tr>
                    <th>Modelo:</th>
                    <td><input type="text" name="modelo" id="modelo" placeholder="Digite o modelo do produto" value=" <?php echo $row_produto['modelo'];?>"/></td>
                </tr>
                <tr>
                    <th>Categoria:</th>
                    <td>
                        <input type="text" name="categoria" placeholder="Ex: Roupa, calçados, acessorios" value=" <?php echo $row_produto['categoria'];?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Quantidade:</th>
                    <td><input type="text" name="quantidade" id="quant" value=" <?php echo $row_produto['quantidade'];?>" placeholder="Digite a quantidade"/></td>
                </tr>
                <tr>
                    <th>Tamanho:</th>
                    <td><input type="text" name="tamanho" placeholder="Ex: P, M, G, 36, 34" value=" <?php echo $row_produto['tamanho'];?>"/></td>
                </tr>
                <tr>
                    <th>Cor:</th>
                    <td><input type="text" name="cor" placeholder="Digite a cor do produto" value=" <?php echo $row_produto['cor'];?>"/></td>
                </tr>
                <tr>
                    <th>Preço:</th>
                    <td><input type="text" name="preco" placeholder="Digite o preço do produto" value=" <?php echo $row_produto['preco'];?>"/></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input id="btnenviar" name="btnenviar" type="submit" value="Editar" /></td>
                </tr>
                
            </table>
        </form>
        </div>
        
          
    </body>
</html>