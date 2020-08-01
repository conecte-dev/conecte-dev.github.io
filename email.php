<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$menssage = addslashes($_POST['message']);



$to = "ooi430010@gmail.com";
$subject = "Contato- Site STTONE";
$body = "Nome: ".$nome. "\r\n"
        "Email: ".$email. "\r\n"
        "Menssagem: ".$menssage;
$header = "From: progamacaoamantesda@gmail.com". "\r\n"
            ."Reply-To:".$email. "\r\n"
            ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("email nnão pode ser enviado") ";"
}

}
?>