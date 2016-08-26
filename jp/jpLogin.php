<?php

/* 
 * pagina trabalha com o
 */

require_once'../class/Crud.class.php';

$lgn = new Login;
print $lgn->setLogin($_POST['email'], $_POST['senha']);