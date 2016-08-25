<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidaSenha
 *
 * @author Roberto Eder
 */
class ValidaSenha {
    
        public function setValidaSenha($pass) {

        if (strlen($pass) < 1) {
            return 'Informe a senha';
        } else
        if (!preg_match('/^[0-9a-z]{8,20}$/i', $pass)) {
            return 'Senha Inválida, senha dever ter no minino 8 e no maximo 12';
        }  else {
            return $pass;
        }
        
    }
}
