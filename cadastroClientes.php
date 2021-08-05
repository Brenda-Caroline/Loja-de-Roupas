<?php
$conexao=mysql_connect ("localhost", "root", "usbw") or die ("Conexao nao efetuada");
mysql_select_db ("lojaRoupas");

$Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$Sexo = filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_STRING);
$Telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);
$Endereco = filter_input(INPUT_POST, 'Endereco', FILTER_SANITIZE_STRING);


    if($Nome == "" || $Nome == null){
        echo "O campo nome deve ser preenchido <br><br>";
		echo "Cadastro nao efetuado";
	}else{
        if($Telefone == "" || $Telefone == null ){
            echo "O campo telefone deve ser preenchido <br><br>";
          echo "Cadastro nao efetuado";
        
        }else{
    $sql=mysql_query ("INSERT INTO clientes (Nome, Sexo, Telefone, Endereco) values ('$Nome', '$Sexo', '$Telefone', '$Endereco')");

        if($sql)
            echo"<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com sucesso!');window.location.href='clientes.php';</script>";
        else
            echo "Cadastro não efetuado.";
        }}

?>