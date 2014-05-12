<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/homework2');

spl_autoload_register(
    function ($className) {
        if (file_exists('homework2/' . str_replace("\\", "/", $className) . '.php')) {
            require_once(str_replace("\\", "/", $className) . '.php');
        }
    }
);

$president = new President('Ivan', 'Mechylin', 43, 'men', 'Aviation University', 10, 'UA', 2);
$gover = new Government('Ivan', 'Mechylin', 43, 'men', 'Aviation University', 10, 'UA', 'minister');
$supreme = new Supreme(400);
$prime = new PrimeMinister();
$president->setPrimeMinister($prime, 'Vasya', 59, 'UKR', 'NAU', 20, 'men');
$prime->setGovernment(10, 'MVD');
$president->setMinisters($prime);
$prime->setGovernment(10, 'Science');
$president->setMinisters($prime);
/*$gover->pushPaper();
$president->getPaper($gover);
$supreme->setNewLow();
$president->setLow($supreme);
$president->getRefuseLow();
$supreme->getSignLow();*/


