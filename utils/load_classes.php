<?php

function loadClass($classe)
{
    $basepath = dirname(__DIR__) . '/class/';

    // Vérifie si la classe est un manager (Manager)
    if (substr($classe, -strlen('Manager')) === 'Manager') {
        $filepath = $basepath . 'manager/' . $classe . '.php';
    } else {
        $filepath = $basepath . 'basics/' . $classe . '.php';
    }

    require_once $filepath;

    
}

spl_autoload_register('loadClass');
