<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UrlAmigavel
 *
 * @author Roberto Eder
 */
class UrlAmigavel {

    private $param, $r_URL, $id;

    public function setUrlAmigavel($param) {
        $this->param = $param;

        if ($this->param) {
            $this->r_URL = substr($this->param, 1);
            $this->r_URL = explode('/', $this->r_URL);

            if (substr($this->param, -1, 1) == '/') {
                return "404.php";
            } else
            if (file_exists($this->r_URL[0] . '.php')) {
                return $this->r_URL[0] . '.php';
            } else {
                return '404.php';
            }
        } else {
            return 'home.php';
        }
    }

}
