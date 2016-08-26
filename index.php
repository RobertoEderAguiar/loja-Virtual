<?php

require_once "class/Crud.class.php"; 
require_once "config/config.php";

$urlAmigavel = new UrlAmigavel;
$returnUrlAmigavel = $urlAmigavel->setUrlAmigavel(REDIRECT_URL);

require_once $returnUrlAmigavel;

  