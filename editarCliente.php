<?php
    $conexao=mysql_connect ("localhost", "root", "usbw") or die ("Conexao nao efetuada");
    mysql_select_db ("lojaRoupas");
    

    $Id = filter_input(INPUT_POST, 'Id', FILTER_SANITIZE_NUMBER_INT);
    $Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
    $Sexo = filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_STRING);
    $Telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);
    $Endereco = filter_input(INPUT_POST, 'Endereco', FILTER_SANITIZE_STRING);


    $sql= "UPDATE clientes SET Nome='$Nome', Sexo='$Sexo', Telefone='$Telefone', Endereco='$Endereco'  WHERE id='$Id'";
    $resultado_clientes = mysql_query( $sql, $conexao) or die(mysql_error());


        if($sql)
            echo"<script language='javascript' type='text/javascript'>alert('Cliente editado com sucesso!');window.location.href='clientes.php';</script>";
        else
            echo "Nao foi possivel editar.";
        
?>
