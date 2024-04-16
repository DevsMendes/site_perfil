<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "pciabela@gmail.com";
    $assunto = " Mensagens - DmDTech";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: devsmendes@outlook.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Ouve um erro ao enviar o email!");
    }


?>