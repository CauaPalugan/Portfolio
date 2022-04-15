<?php

if(isset(addslashes($_POST['email']) && !empty(addslashes($_POST['email'])){));

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "caua.palugam@gmail.com";
$subject = "Contato - Portfólio Profissional";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".mensagem;
$header = "From:ju_palugan@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Houve um erro");
}
}
?>