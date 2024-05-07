<?php

spl_autoload_register('oMeuAutoLoader');
function oMeuAutoLoader($classACarregar)
{
    $ficheiroAcarregar = str_replace('\\', DIRECTORY_SEPARATOR, $classACarregar)
        . ".php";
    require_once $ficheiroAcarregar;
}


