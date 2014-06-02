<?php

namespace BionicUniversity\DmytroShumitskiy\OopHomework\Tests;

use BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants\Deputy;

class DeputeTest extends \PHPUnit_Framework_TestCase
{
    public $stuff = array('PentHouse', '10kg', 'model x10003', 100000);

    public function testDeputeCreating()
    {
        $user = new Deputy('Ivan Ivanov', 35, 'men', 'KPI', 10, 'UA', 'Svoboda');
        $this->assertEquals('Ivan Ivanov', $user->getName());
        $this->assertEquals(35, $user->getAge());
        $this->assertEquals('men', $user->getGender());
        $this->assertEquals('KPI', $user->getEducation());
        $this->assertEquals(10, $user->getExperience());
        $this->assertEquals('UA', $user->getCitizenship());
        $this->assertEquals('Svoboda', $user->getParty());
    }

    public function testMakeSomeStuff()
    {
        $user = new Deputy('Ivan Ivanov', 35, 'men', 'KPI', 10, 'UA', 'Svoboda');
        $user->makeSomeStuff('PentHouse', '10kg', 'model x10003', 100000);
        $this->assertEquals($this->stuff, $user->getStuff());
    }

    public function testDeclaration()
    {
        $user = new Deputy('Ivan Ivanov', 35, 'men', 'KPI', 10, 'UA', 'Svoboda');
        $user->setDeclaration();
        $this->assertNotEmpty($user->getStuffForPublic());
    }
}
