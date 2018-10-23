<?php

Class authentication {

  public function __construct() {

      $this->own_url = BASE_URL."/mge/service.sbr?serviceName=MobileLoginSP.login";
  }

  public function login() {

    global $options;

    $body = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
    <serviceRequest serviceName=\"MobileLoginSP.login\">
    <requestBody>
    <NOMUSU>".USERNAME."</NOMUSU>
    <INTERNO2>".INTERNO2."</INTERNO2>
    </requestBody>
    </serviceRequest>";

    var_dump($options);

    $options_ = $options;
    $options_['http']['content'] = $body;


    $context  = stream_context_create($options_);
    $result = file_get_contents($this->own_url, false, $context);

    return $result;

  }

}


?>
