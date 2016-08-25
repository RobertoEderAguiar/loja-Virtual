<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Roberto Eder
 */
class Login {
    private $vem ,$vsh, $cpt, $crud, $email, $senha, $log, $dds;
    
    public function setLogin($email,$senha ) {
        $this->vem =new ValidaEmail;
        $this->vsh = new ValidaSenha;
        $this->cpt = new Cripto;
        $this->crud = new Crud;
        
        $this->email=  $this->vem->setValidaEmail($email);
        $this->senha= $this->vsh->setValidaSenha($senha);
        
        $this->log =$this->senha==$senha ?
        $this->crud->select('*', 'usuario', ' WHERE email=? && senha=?',
                              array($this->email,$this->cpt->setCripto($this->senha))):
            FALSE;
        
        if($this->email<>$email)
        {
            return $this->email;
        }else
            if ($this->senha<>$senha) 
        {
            return $this->senha;
        }  else         
   
        if($this->log && $this->log->rowCount()>0)
        {
            foreach ($this->log as $this->dds)
            {
               $_SESSION['logado']  = $this->dds;  
               
            }
            
        }  else {
            return 'Acesso Negado!';
        }
            }    
    
    
}
