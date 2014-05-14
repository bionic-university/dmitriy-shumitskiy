<?php
require __DIR__ . '/../bootstrap.php';

use BionicUniversity\DmytroShumitskiy\OopHomework\President\Authorities\Government as Government;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Authorities\Supreme as Supreme;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants\President as President;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants\PrimeMinister as PrimeMinister;

/**
 * Create Objects
 */
$supreme = new Supreme(400);
$government = new Government('Science', 10);
$president = new President('Ivan', 'Mechylin', 43, 'men', 'Aviation University', 10, 'UA', 2);
$prime = new PrimeMinister();

/**
 * Methods
 */
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


