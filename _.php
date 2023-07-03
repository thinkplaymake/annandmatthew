<?php

    // master include for all files.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require_once('vendor/autoload.php');
    $twig = new \am\twig;



    


    
    function print_pre($o,$return=false) {
        $output = print_r($o,true);
        if ($return==false) print '<pre>' . $output . '</pre>';
        return $output;
    }