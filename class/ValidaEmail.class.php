<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidaEmail
 *Classe paravalidar Email
 * @author Roberto Eder
 */
class ValidaEmail {
   
    public function setValidaEmail($email) {
        
        if(strlen($email)<1)
        {
            return 'Informe o E-mail';
        }else 
           if(!preg_match('/^[0-9a-z\_\-\.]+\@[0-9a-z\_\-\.]*[0-9a-z\_\-\.]+\.[a-z]{2,3}$/i', $email))
           {
               return 'E-mail invalido'; 
           }else
           {
               return $email;
           }
            
        
    }
}
