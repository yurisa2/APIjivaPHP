<?php

include "include/include_all.php";

echo '<pre>';

$prod = new product;

$prod->list_prod()->asXml("tst.xml");

// file_put_contents("prod.ser",serialize($prod->list_prod()));


 ?>
