<?php

$remetente      = 'From: Nova mensagem';
$destinatario   = 'email@email.com.br';
$assunto        = utf8_decode($_POST['primeironome']);
$assunto2       = utf8_decode($_POST['formemail']);
$assunto3        = utf8_decode($_POST['telefone']);
$assunto4        = utf8_decode($_POST['msg']);
$alerta         = header("Refresh: 2;URL=LINKQVAIAPOSENVIARFORM.html");'Sucesso! Entraremos em contato em breve.';

$corpo          = "

Nome:       ".$assunto."
Nome:       ".$assunto2."
Nome:       ".$assunto3."
Nome:       ".$assunto4."
";

mail($destinatario, $assunto, $corpo, $remetente);
echo $alerta;