<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/homework2');

spl_autoload_register(
    function ($className) {
        if (file_exists('homework2/' . str_replace("\\", "/", $className) . '.php')) {
            require_once(str_replace("\\", "/", $className) . '.php');
        }
    }
);

$president = new President('Ivan', 'Mechylin', 43,'men','Aviation University',10,'UA',2);
$gover = new Government('Ivan', 'Mechylin', 43,'men','Aviation University',10,'UA','minister');
$gover->pushPaper();
$president->getPaper($gover);

