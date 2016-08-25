<?php
/**
 * Description of ConDB
 *Classe para conexão com a base de dados
 * @author Roberto Eder
 */

// o autoload serve para chamada das classes na pasta classe.
function __autoload($class){require_once"{$class}.class.php";}

class ConDB {
    
    public  $cnx;
    private function setConn()
    {
        return
        is_null($this->cnx) ?
                $this->cnx = new PDO("mysql:host=localhost;dbname=lojavirtual","root",""):
                $this->cnx;
    }
    
    public function getConn()
    {
        return $this->setConn();
    }
    
    
    }
 $crud = new Crud;

 /*$insert = crud->insert('usuario', 'login=?, senha=?, email=?',
         array('Edmundo','123456789', 'edmundo@gmail.com'));*/

 
/*$sel =  $crud->select('*', 'usuario', '', array());
var_dump($sel->rowCount());
foreach ($sel as $row)
{
    var_dump($row);
}*/
 
 /*
  * 
  * $upd = $crud->update('usuario', 'login=? WHERE id_usuario=?', array('Roberto Eder',1));
  * var_dump($upd->rowCount());
  * print $upd->rowCount() < 1 ? 'Nao atualizacoes a fazer' :'Atualizado com Sucesso';
  */
 
 
// $crud->delete('usuario','WHERE id_usuario=? ', array(57));
 
 /*$vle = new ValidaEmail;
  var_dump($vle->setValidaEmail ('roberto@gmail.com.br'));*/
 /*$vls = new ValidaSenha;
 var_dump($vls->setValidaSenha('12345678'));*/
 
/*$cpt = new Cripto;
  var_dump($cpt->setCripto('123456789'));*/
 
 
 
/*$lgn=new Login;
 var_dump($lgn->setLogin('Danny@gmail.com', '123456789'));*/
 
 