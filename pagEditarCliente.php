
<?php
$conexao=mysql_connect ("localhost", "root", "usbw") or die ("Conexao nao efetuada");
mysql_select_db ("lojaRoupas");
$Id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_clientes = "SELECT * FROM clientes where id='$Id'";
$resultado_clientes = mysql_query( $result_clientes,  $conexao);
$row_cliente= mysql_fetch_assoc($resultado_clientes);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="meucss/styles.css">
        <link href = "https://fonts.googleapis.com/css2? family = EB + Garamond & family = Ibarra + Real + Nova & family = PT + Serif & display = swap "rel =" stylesheet ">
        <title>Minha página</title>


        <!--<script>
            function edita(){
                //alert('Editado com sucesso!');
                
            }
            
        </script>-->
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
        <h1> Editar Clientes </h1>  
        
        <form method="POST" action="editarCliente.php"> 
            <table>
                <input type="hidden" name="Id" value="<?php echo $row_cliente['id'] ;?>"/>
                <tr>
                    <th>Nome Completo:</th>
                    <td><input type="text" name="Nome" id="Nome" value=" <?php echo $row_cliente['nome'];?>"/></td>
                </tr>
                <tr>
                    <th>Sexo:</th>
                    <td>
                        <input type="radio" name="Sexo" id="Feminino" value="Feminino" <?php echo ($row_cliente['sexo']=='Feminino')?'checked':'';?>/> Feminino
                        <input type="radio" name="Sexo" id="Masculino" value="Masculino" <?php echo ($row_cliente['sexo']=='Masculino')?'checked':'';?>/> Masculino
                    </td>
                </tr>
                
                <tr>
                    <th>Telefone:</th>
                    <td>
                        <input type="text" name="Telefone" id="Telefone" placeholder="(xx) xxxxx-xxxx" value="<?php echo $row_cliente['telefone'];?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Endereço:</th>
                    <td><input type="text" name="Endereco" id="Endereco" value="<?php echo $row_cliente['endereco'];?>"/></td>
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