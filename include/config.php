<?php

$url = "http://cantinhoessencia.ddns-intelbras.com.br:8280";

$nome_usuario = "INTEGRA";

$senha = "123456";

$interno2 = md5($nome_usuario.$senha);

$session_ttl = 250; // Session TTL, in seconds

$session_file_location = "include/files/session.json";

$options = array(
        'http' => array(
        'header'  => "Content-type: text/xml;charset=iso-8859-1\r\n",
        'method'  => 'POST'
        )
  );

?>
