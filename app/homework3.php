<?php
require __DIR__ . '/../bootstrap.php';

use BionicUniversity\DmytroShumitskiy\OopHomework\President\Authorities\Government as Government;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Authorities\Supreme as Supreme;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants\Deputy as Deputy;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants\President as President;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants\PrimeMinister as PrimeMinister;

/**
 * Create Objects
 */
$supreme = new Supreme(400);
$president = new President('Ivan', 'Mechylin', 43, 'men', 'Aviation University', 10, 'UA', 2);
$scienceGovernment = new Government('Science', 10);
$prime = new PrimeMinister();
$ivanov = new Deputy('Ivan', 'Ivanov', 35, 'men', 'KPI', 10, 'UA', 'Svoboda');

/**
 * Methods
 */
$president->setPrimeMinister($prime, 'Vasya', 59, 'UKR', 'NAU', 20, 'men');
$prime->setGovernmentHead('Nikolay Illich', $scienceGovernment);
$president->approveMinistryHead($prime);
