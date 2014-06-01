<?php

namespace BionicUniversity\DmytroShumitskiy\OopHomework\Tests;

use BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants\Deputy;

class DeputeTest extends \PHPUnit_Framework_TestCase
{

    public function testGetName()
    {
        $user = new Deputy('Ivan Ivanov', 35, 'men', 'KPI', 10, 'UA', 'Svoboda');
        $this->assertEquals(
            'Ivan Ivanov',
            35,
            'men',
            'KPI',
            10,
            'UA',
            'Svoboda',
            $user->getName(),
            $user->getAge(),
            $user->getGender(),
            $user->getEducation(),
            $user->getExperience(),
            $user->getCitizenship(),
            $user->getParty()
        );
    }
}
