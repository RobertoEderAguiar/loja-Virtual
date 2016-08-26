<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Crud
 *classe para CRUD (acrónimo de Create, Read, Update e Delete)
 * 
 * @author Roberto Eder
 */
function __autoload($class){require_once"{$class}.class.php";}

class Crud extends ConDB {
  
    
    private  $query;
    private function prepExec($prep,$exec)
    {
        $this->query = $this->getConn()->prepare($prep);
        $this->query->execute($exec);
        
    }
    
    //Função de insert no Banco
    public function insert($table,$prep,$exec)
    {
        $this->prepExec('INSERT INTO '.$table.' SET '.$prep.'',  $exec);
        return $this->getConn()->lastInsertId();
    }
     
    //Função de select(Lista) no banco
    public function select($filds,$table,$prep,$exec)
    {
        $this->prepExec('SELECT ' .$filds. ' FROM '.$table. ''.$prep.'', $exec);
        return $this->query;
    }
    //Função para Update
    public function update($table,$prep,$exec)
    {
        $this->prepExec('UPDATE ' .$table. ' SET '.$prep.' ' , $exec);
       return $this->query;
        
    }
    
    //Função para deleta
    public function delete($table,$prep,$exec)
    {
        $this->prepExec('DELETE FROM '.$table. ' '.$prep.' ' , $exec);
    }
}
