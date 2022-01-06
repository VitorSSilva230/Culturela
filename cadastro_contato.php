<?php

    include_once('conexao.php');
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];

    $contato_msg="INSERT INTO contato (nome, sobrenome, email, assunto, created) VALUES ('$nome','$sobrenome','$email','$assunto', NOW())";
    $result_contato_msg = mysqli_query($conexao,$contato_msg)
?>
 
