<?php

/**
 * AUTOLOAD DE CLASSES PARA O PACOTE 'Classes'.
 */

function autoload($class)
{
    $diretorioBase = DIR_APP.DS;
    $class = $diretorioBase.'Classes'.DS.str_replace('\\', DS, $class).'.php';

    if (file_exists($class) && !is_dir($class)) {
        include $class;
    }
}

spl_autoload_register('autoload');
