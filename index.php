<?php

require_once "class/Crud.class.php"; 
require_once "config/config.php";

$r_QueryString = explode('/',  substr(REDIRECT_QUERY_STRING, 3) );
$urlAmigavel = new UrlAmigavel;
 require_once $urlAmigavel->setUrlAmigavel(REDIRECT_URL);

  