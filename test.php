<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/house');

spl_autoload_register(
    function ($className) {
        if (file_exists('house/' . str_replace("\\", "/", $className) . '.php')) {
            require_once(str_replace("\\", "/", $className) . '.php');
        }
    }
);

/**
 * BlockOfFlats creating
 */

$houseParam1 = new buildConfigs\BuildingParams();
$houseParam1->setParams('steel', 'red', 5, 150, '5');
$houseAddress1 = new buildConfigs\BuildingAddress();
$houseAddress1->setAddress(15, 'Sadova', 'UKR', 'UKR');
$house1 = new BlockOfFlats();
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
$garage = new Garage();
$garage->setBuildingParams($garageParam);
$garage->setAddress($garageAddress);

/**
 *  One room house
 */

$oneRoom = new OneRoom();
$oneRoom->getBedAmount();
$oneRoom->getWindowAmount();
$oneRoom->setWiFi();

/**
 *  More rooms
 */

$moreRoom = new MoreRoom();
$moreRoom->getBedAmount();
$moreRoom->getWindowAmount();
$moreRoom->setWiFi();
$moreRoom->setBreakfast();
$moreRoom->setClean();

/**
 * Parking
 */

$parking = new Parking();
$parking->setCars(2);
$parking->securityPrice(10);
$parking->setWash();
$parking->rentPay(10);