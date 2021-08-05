<?php
    $conexao=mysql_connect ("localhost", "root", "usbw") or die ("Conexao nao efetuada");
    mysql_select_db ("lojaRoupas");
    

    $Id = filter_input(INPUT_POST, 'Id', FILTER_SANITIZE_NUMBER_INT);
    $Nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $Marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
    $Modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
    $Categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
    $Quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
    $Tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_STRING);
    $Cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
    $Preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);


    $sql= "UPDATE produtos SET nome='$Nome', marca='$Marca', modelo='$Modelo', categoria='$Categoria', quantidade='$Quantidade', tamanho='$Tamanho', cor='$Cor', preco='$Preco'  WHERE id='$Id'";
    $resultado_produtos = mysql_query( $sql, $conexao) or die(mysql_error());


        if($sql)
            echo"<script language='javascript' type='text/javascript'>alert('Produto editado com sucesso!');window.location.href='produtos.php';</script>";
        else
            echo "Nao foi possivel editar.";
        
?>
