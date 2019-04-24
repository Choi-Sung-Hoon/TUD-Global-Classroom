<?php
    //Load config
    require_once 'config/config.php';

    // Load session helper
    require_once 'helpers/session_helper.php';
    
    // Autoload Core Libraries
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className . '.php';
    });
