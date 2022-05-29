<?php

// see tomorrow

spl_autoload_register(function($className){
    require_once("models/$className.php");

});

spl_autoload_register(function($InterfaceName){
    require_once("models/$InterfaceName.php");

});
