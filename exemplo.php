<?php

require_once "vendor/autoload.php";

use fabio\hortifrute\Search;

$busca = New Search;

$resultado = $busca->getAddressFromZipcode('01001000');

print_r($resultado);
