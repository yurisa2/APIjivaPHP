<?php


Class product extends base{

  public function __construct() {
    global $options;

    $auth = new authentication;
    $sess = $auth->get_session();

    $this->own_url = BASE_URL."/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords";
    $this->opt_req = $options;
    $this->opt_req["http"]["header"] = $this->opt_req["http"]["header"]."Cookie: JSESSIONID=".$sess;

  }

  public function list_prod() {
    $req = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
    <serviceRequest serviceName=\"CRUDServiceProvider.loadRecords\">
    <requestBody>
    <dataSet rootEntity=\"Produto\" includePresentationFields=\"S\" parallelLoader=\"false\">
    <entity path =\"\">
    <fieldset list=\"*\" />
    </entity>
    </dataSet>
    </requestBody>
    </serviceRequest>
    ";

    $options_ = $this->opt_req;
    $options_['http']['content'] = $req;

    var_dump($options_);

    $context  = stream_context_create($options_);
    $result = file_get_contents($this->own_url, false, $context);

    $this->prod = $this->return_prop($result);

    return $this->prod;
  }

}


  ?>
