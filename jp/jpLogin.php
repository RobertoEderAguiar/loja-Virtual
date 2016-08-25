<?php

/* 
 * pagina trabalha com o
 */

require_once'../class/ConDB.class.php';

$lgn = new Login;
print $lgn->setLogin($_POST['email'], $_POST['senha']);