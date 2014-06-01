<?php
/**
 * Created by PhpStorm.
 * User: accept
 * Date: 02.06.14
 * Time: 01:08
 */

namespace BionicUniversity\DmytroShumitskiy\OopHomework\Tests;

use BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants\Deputy;

class DeputeTest extends \PHPUnit_Framework_TestCase
{

    public function TestMakeSomeStuff(){
        $user = new Deputy('Ivan', 'Ivanov', 35, 'men', 'KPI', 10, 'UA', 'Svoboda');
        $this->assertEmpty($user->getStuffForPublic());
    }
}
