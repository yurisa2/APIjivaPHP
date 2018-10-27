<?php

include "include/include_all.php";

echo '<pre>';

$prod = new product;



file_put_contents("prod.ser",serialize($prod->list_prod()));


 ?>
