<?php
      
define('REDIRECT_QUERY_STRING',
        isset($_SERVER['REDIRECT_QUERY_STRING'])? $_SERVER['REDIRECT_QUERY_STRING'] : NULL);

define('REDIRECT_URL',
        isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL']: NULL);
