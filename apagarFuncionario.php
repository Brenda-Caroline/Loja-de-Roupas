<?php
$conexao=mysql_connect ("localhost", "root", "usbw") or die ("Conexao nao efetuada");
mysql_select_db ("lojaRoupas");

$Id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($Id)){
    $result_funcionarios = "DELETE FROM funcionarios WHERE id='$Id'";
    $resultado_funcionarios = mysql_query( $result_funcionarios, $conexao) or die(mysql_error());

    if(mysql_affected_rows($conexao)){
        echo"<script language='javascript' type='text/javascript'>alert('Cliente apagado com sucesso!');window.location.href='funcionarios.php';</script>";
        
    }
    else{
        echo"<script language='javascript' type='text/javascript'>alert('Cliente não foi apagado!');window.location.href='funcionarios.php';</script>";
        
    }

} else{
    echo"<script language='javascript' type='text/javascript'>alert('Selecione um cliente');window.location.href='funcionarios.php';</script>";
    
}


?>