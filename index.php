<?php

include "include/include_all.php";

echo '<pre>';


$body = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
<serviceRequest serviceName=\"MobileLoginSP.login\">
<requestBody>
<NOMUSU>$nome_usuario</NOMUSU>
<INTERNO2>$interno2</INTERNO2>
</requestBody>
</serviceRequest>";

// $url = 'URL';
$data = array($body);
$options = array(
        'http' => array(
        'header'  => "Content-type: text/xml;charset=iso-8859-1\r\n",
        'method'  => 'POST',
        // 'content' => http_build_query($data),
        'content' => $body,
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$result_xml = simplexml_load_string($result);

echo "<strong>Body de envio</strong><br>";
var_dump(htmlentities($body));
echo "<hr>";
echo "<strong>Response</strong><br>";
var_dump(htmlentities($result));
echo "<hr>";
echo "<strong>Decomposição XML</strong><br>";
var_dump($result_xml);
echo "<hr>";
echo "<strong>Session ID</strong><br>";
echo ("SESSION_ID: ".$result_xml->responseBody->jsessionid);


 ?>
