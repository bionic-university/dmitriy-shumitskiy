<?php
require __DIR__ . '/../bootstrap.php';
use BionicUniversity\DmytroShumitskiy\OopHomework\House as House;
use BionicUniversity\DmytroShumitskiy\OopHomework\House\buildConfigs as buildConfigs;

/**
 * BlockOfFlats creating
 */

$houseParam1 = new buildConfigs\BuildingParams();
$houseParam1->setParams('steel', 'red', 5, 150, '5');
$houseAddress1 = new buildConfigs\BuildingAddress();
$houseAddress1->setAddress(15, 'Sadova', 'UKR', 'UKR');
$house1 = new House\BlockOfFlats();
$house1->setBuildingParams($houseParam1);
$house1->setAddress($houseAddress1);
$house1->rentPay(5);

/**
 * Garage creating
 */

$garageParam = new buildConfigs\BuildingParams();
$garageParam->setParams('Beton', 'black', 1, 50, 1);
$garageAddress = new buildConfigs\BuildingAddress();
$garageAddress->setAddress(20, 'Ivanovskaya', 'UKR', 'UKR');
$garage = new House\Garage();
$garage->setBuildingParams($garageParam);
$garage->setAddress($garageAddress);

/**
 *  One room house
 */

$oneRoom = new House\OneRoom();
$oneRoom->getBedAmount();
$oneRoom->getWindowAmount();
$oneRoom->setWiFi();

/**
 *  More rooms
 */

$moreRoom = new House\MoreRoom();
$moreRoom->getBedAmount();
$moreRoom->getWindowAmount();
$moreRoom->setWiFi();
$moreRoom->setBreakfast();
$moreRoom->setClean();

/**
 * Parking
 */

$parking = new House\Parking();
$parking->setCars(2);
$parking->securityPrice(10);
$parking->setWash();
$parking->rentPay(10);
