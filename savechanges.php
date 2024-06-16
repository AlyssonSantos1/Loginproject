<?php

    include_once('configuracao.php');


    if(isset($_POST['update']))
    {       
        include_once('configuracao.php');

        $nome= $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $idade = $_POST['idade'];
        
        $sqlUpdate = "UPDATE usuarios SET nome = '$nome', senha = '$senha', email = '$email', telefone = '$telefone', sexo = '$sexo', idade = '$idade'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

        
    }

    header('Location: system.php')

?>