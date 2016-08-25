<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cripto
 *
 * @author Roberto Eder
 */
class Cripto {
    
    public function setCripto($param)
    {
       // $cripto =  md5($param); //32 caractere
        //$cripto = sha1($param);//40 caractere
        //$cripto = hash('sha256',$param);//64caractere
        //$cripto = hash('sha512',$param);//128caractere   
        
        $cripto = hash('whirlpool',hash('sha512', sha1(md5($param))));
        
        return $cripto;
    } 
}
