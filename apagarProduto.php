<?php
$conexao=mysql_connect ("localhost", "root", "usbw") or die ("Conexao nao efetuada");
mysql_select_db ("lojaRoupas");

$Id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($Id)){
    $result_produtos = "DELETE FROM produtos WHERE id='$Id'";
    $resultado_produtos = mysql_query( $result_produtos, $conexao) or die(mysql_error());

    if(mysql_affected_rows($conexao)){
        echo"<script language='javascript' type='text/javascript'>alert('Produto apagado com sucesso!');window.location.href='produtos.php';</script>";
        
    }
    else{
        echo"<script language='javascript' type='text/javascript'>alert('Produto não foi apagado!');window.location.href='produtos.php';</script>";
        
    }

} else{
    echo"<script language='javascript' type='text/javascript'>alert('Selecione um Produto');window.location.href='produtos.php';</script>";
    
}


?>