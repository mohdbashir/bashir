<?php
/**** Auto loader file ****/

spl_autoload_register(function ($class) {
    if (strpos($class, 'SayHello\\') !== 0) {
        return;
    }

    $file = __DIR__.str_replace('\\', DIRECTORY_SEPARATOR, substr($class, strlen('SayHello'))).'.php';

    if (is_file($file)) {
        require_once $file;
    }
});
